<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Beers Controller
 *
 * @property \App\Model\Table\BeersTable $Beers
 */
class BeersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types', 'Formats']
        ];
        $this->set('beers', $this->paginate($this->Beers));
        $this->set('_serialize', ['beers']);
    }

    /**
     * View method
     *
     * @param string|null $id Beer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beer = $this->Beers->get($id, [
            'contain' => ['Types', 'Formats']
        ]);
        $this->set('beer', $beer);
        $this->set('_serialize', ['beer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $beer = $this->Beers->newEntity();
        if ($this->request->is('post')) {
            $beer = $this->Beers->patchEntity($beer, $this->request->data);
            if ($this->Beers->save($beer)) {
                $this->Flash->success('The beer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The beer could not be saved. Please, try again.');
            }
        }
        $types = $this->Beers->Types->find('list', ['limit' => 200]);
        $formats = $this->Beers->Formats->find('list', ['limit' => 200]);
        $this->set(compact('beer', 'types', 'formats'));
        $this->set('_serialize', ['beer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Beer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $beer = $this->Beers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beer = $this->Beers->patchEntity($beer, $this->request->data);
            if ($this->Beers->save($beer)) {
                $this->Flash->success('The beer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The beer could not be saved. Please, try again.');
            }
        }
        $types = $this->Beers->Types->find('list', ['limit' => 200]);
        $formats = $this->Beers->Formats->find('list', ['limit' => 200]);
        $this->set(compact('beer', 'types', 'formats'));
        $this->set('_serialize', ['beer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Beer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $beer = $this->Beers->get($id);
        if ($this->Beers->delete($beer)) {
            $this->Flash->success('The beer has been deleted.');
        } else {
            $this->Flash->error('The beer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
