<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lehrberuf Controller
 *
 * @property \App\Model\Table\LehrberufTable $Lehrberuf
 * @method \App\Model\Entity\Lehrberuf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LehrberufController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lehrberuf = $this->paginate($this->Lehrberuf);

        $this->set(compact('lehrberuf'));
    }

    /**
     * View method
     *
     * @param string|null $id Lehrberuf id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lehrberuf = $this->Lehrberuf->get($id, [
            'contain' => ['Person', 'School'],
        ]);

        $this->set(compact('lehrberuf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lehrberuf = $this->Lehrberuf->newEmptyEntity();
        if ($this->request->is('post')) {
            $lehrberuf = $this->Lehrberuf->patchEntity($lehrberuf, $this->request->getData());
            if ($this->Lehrberuf->save($lehrberuf)) {
                $this->Flash->success(__('The lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lehrberuf could not be saved. Please, try again.'));
        }
        $person = $this->Lehrberuf->Person->find('list', ['limit' => 200]);
        $school = $this->Lehrberuf->School->find('list', ['limit' => 200]);
        $this->set(compact('lehrberuf', 'person', 'school'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lehrberuf = $this->Lehrberuf->get($id, [
            'contain' => ['Person', 'School'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lehrberuf = $this->Lehrberuf->patchEntity($lehrberuf, $this->request->getData());
            if ($this->Lehrberuf->save($lehrberuf)) {
                $this->Flash->success(__('The lehrberuf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lehrberuf could not be saved. Please, try again.'));
        }
        $person = $this->Lehrberuf->Person->find('list', ['limit' => 200]);
        $school = $this->Lehrberuf->School->find('list', ['limit' => 200]);
        $this->set(compact('lehrberuf', 'person', 'school'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lehrberuf id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lehrberuf = $this->Lehrberuf->get($id);
        if ($this->Lehrberuf->delete($lehrberuf)) {
            $this->Flash->success(__('The lehrberuf has been deleted.'));
        } else {
            $this->Flash->error(__('The lehrberuf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
