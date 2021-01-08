<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PersonLehrberuf Controller
 *
 * @property \App\Model\Table\PersonLehrberufTable $PersonLehrberuf
 * @method \App\Model\Entity\PersonLehrberuf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonLehrberufController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Person', 'SchoolLehrberuf'],
        ];
        $personLehrberuf = $this->paginate($this->PersonLehrberuf);

        $this->set(compact('personLehrberuf'));
    }

    /**
     * View method
     *
     * @param string|null $id Person Lehrberuf id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personLehrberuf = $this->PersonLehrberuf->get($id, [
            'contain' => ['Person', 'SchoolLehrberuf'],
        ]);

        $this->set(compact('personLehrberuf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personLehrberuf = $this->PersonLehrberuf->newEmptyEntity();
        if ($this->request->is('post')) {
            $personLehrberuf = $this->PersonLehrberuf->patchEntity($personLehrberuf, $this->request->getData());
            if ($this->PersonLehrberuf->save($personLehrberuf)) {
                $this->Flash->success(__('The person lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person lehrberuf could not be saved. Please, try again.'));
        }
        $person = $this->PersonLehrberuf->Person->find('list', ['limit' => 200]);
        $schoolLehrberuf = $this->PersonLehrberuf->SchoolLehrberuf->find('list', ['limit' => 200]);
        $this->set(compact('personLehrberuf', 'person', 'schoolLehrberuf'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Person Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personLehrberuf = $this->PersonLehrberuf->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personLehrberuf = $this->PersonLehrberuf->patchEntity($personLehrberuf, $this->request->getData());
            if ($this->PersonLehrberuf->save($personLehrberuf)) {
                $this->Flash->success(__('The person lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person lehrberuf could not be saved. Please, try again.'));
        }
        $person = $this->PersonLehrberuf->Person->find('list', ['limit' => 200]);
        $schoolLehrberuf = $this->PersonLehrberuf->SchoolLehrberuf->find('list', ['limit' => 200]);
        $this->set(compact('personLehrberuf', 'person', 'schoolLehrberuf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Person Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personLehrberuf = $this->PersonLehrberuf->get($id);
        if ($this->PersonLehrberuf->delete($personLehrberuf)) {
            $this->Flash->success(__('The person lehrberuf has been deleted.'));
        } else {
            $this->Flash->error(__('The person lehrberuf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
