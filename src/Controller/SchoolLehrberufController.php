<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SchoolLehrberuf Controller
 *
 * @property \App\Model\Table\SchoolLehrberufTable $SchoolLehrberuf
 * @method \App\Model\Entity\SchoolLehrberuf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchoolLehrberufController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['School', 'Lehrberuf'],
        ];
        $schoolLehrberuf = $this->paginate($this->SchoolLehrberuf);

        $this->set(compact('schoolLehrberuf'));
    }

    /**
     * View method
     *
     * @param string|null $id School Lehrberuf id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolLehrberuf = $this->SchoolLehrberuf->get($id, [
            'contain' => ['School', 'Lehrberuf'],
        ]);

        $this->set(compact('schoolLehrberuf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolLehrberuf = $this->SchoolLehrberuf->newEmptyEntity();
        if ($this->request->is('post')) {
            $schoolLehrberuf = $this->SchoolLehrberuf->patchEntity($schoolLehrberuf, $this->request->getData());
            if ($this->SchoolLehrberuf->save($schoolLehrberuf)) {
                $this->Flash->success(__('The school lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school lehrberuf could not be saved. Please, try again.'));
        }
        $school = $this->SchoolLehrberuf->School->find('list', ['limit' => 200]);
        $lehrberuf = $this->SchoolLehrberuf->Lehrberuf->find('list', ['limit' => 200]);
        $this->set(compact('schoolLehrberuf', 'school', 'lehrberuf'));
    }

    /**
     * Edit method
     *
     * @param string|null $id School Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolLehrberuf = $this->SchoolLehrberuf->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolLehrberuf = $this->SchoolLehrberuf->patchEntity($schoolLehrberuf, $this->request->getData());
            if ($this->SchoolLehrberuf->save($schoolLehrberuf)) {
                $this->Flash->success(__('The school lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school lehrberuf could not be saved. Please, try again.'));
        }
        $school = $this->SchoolLehrberuf->School->find('list', ['limit' => 200]);
        $lehrberuf = $this->SchoolLehrberuf->Lehrberuf->find('list', ['limit' => 200]);
        $this->set(compact('schoolLehrberuf', 'school', 'lehrberuf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id School Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolLehrberuf = $this->SchoolLehrberuf->get($id);
        if ($this->SchoolLehrberuf->delete($schoolLehrberuf)) {
            $this->Flash->success(__('The school lehrberuf has been deleted.'));
        } else {
            $this->Flash->error(__('The school lehrberuf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
