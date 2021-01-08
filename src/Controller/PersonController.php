<?php
declare(strict_types=1);

namespace App\Controller;

use Exception;
use Cake\Datasource\ConnectionManager;


/**
 * Person Controller
 *
 * @property \App\Model\Table\PersonTable $Person
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->RequestHandler->prefers('json');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Job'],
        ];
        $person = $this->paginate($this->Person);

        $this->set(compact('person'));
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->Person->get($id, [
            'contain' => ['Job', 'Lehrberuf'],
        ]);

        $this->set(compact('person'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->Person->newEmptyEntity();
        if ($this->request->is('post')) {
            
            $person = $this->Person->patchEntity($person, $this->request->getData());
            if ($this->Person->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                $personLehrberufTable = $this->getTableLocator()->get('PersonLehrberuf');
                $schoolTable = $this->getTableLocator()->get('School');
                $lehrberufTable = $this->getTableLocator()->get('Lehrberuf');
    
                $personLehrberuf = $personLehrberufTable->newEmptyEntity();
    
                $personLehrberuf->person_id = $person->id;
                $personLehrberuf->school_id = $this->request->getData("school_id");
                $personLehrberuf->lehrberuf_id = $this->request->getData("lehrberuf_id");
                $personLehrberuf->school = $schoolTable->findById($this->request->getData("school_id"))->first();
                $personLehrberuf->lehrberuf = $lehrberufTable->findById($this->request->getData('lehrberuf_id'))->first();
    
                $test = "INSERT INTO secondtask.person_lehrberuf (person_id, school_id, lehrberuf_id) VALUES (".$person->id.", ".$this->request->getData("school_id").", ".$this->request->getData("lehrberuf_id").");";

                $connection = ConnectionManager::get('default');
                $connection->execute($test);
                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The .... has been saved.'));
                // if ($personLehrberufTable->save($personLehrberuf)) {
                //     // return $this->redirect(['action' => 'index']);
                // }
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
        $job = $this->Person->Job->find('list', ['limit' => 200]);
        $lehrberuf = $this->Person->Lehrberuf->find('list', ['limit' => 200, 'fields' => array('id', 'bezeichnung')]);
        $schools = $this->Person->Lehrberuf->School->find('list', ['limit' => 200, 'fields' => array('id', 'name')]);
        $this->set(compact('person', 'job', 'lehrberuf', 'schools'));
    }

    public function getlehrberufe() {   
        $id = (int)$this->request->getQuery('id');
        
        $this->log((string)$id, 'debug');
        $this->log('test', 'debug');

		if (!$id) {
			throw new Exception();
		}

		$lehrberufe = $this->Person->Lehrberuf->find('list', ['limit' => 200]);

        $lehrberufe = $this->Person->Lehrberuf->find('list', ['limit' => 200])->innerJoinWith('School', function ($q) use ($id) {
            return $q->where(['School.id' => $id]);
        });

        // $lehrberufe->innerJoinWith('School_Lehrberuf', function ($q) {
        //     return $q->where(['SchoolLehrberuf.school_id' => '2']);
        // });

        $data = array(
            'content' => $lehrberufe,
            'error' => '',
        );

        $this->set($data);
        $this->viewBuilder()->setOption('serialize', true);
        $this->RequestHandler->renderAs($this, 'json');
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->Person->get($id, [
            'contain' => ['Lehrberuf'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $person = $this->Person->patchEntity($person, $this->request->getData());
            if ($this->Person->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
        $job = $this->Person->Job->find('list', ['limit' => 200]);
        $lehrberuf = $this->Person->Lehrberuf->find('list', ['limit' => 200]);
        $this->set(compact('person', 'job', 'lehrberuf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->Person->get($id);
        if ($this->Person->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
