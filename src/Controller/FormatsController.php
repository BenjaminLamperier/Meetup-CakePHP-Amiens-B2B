<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Formats Controller
 *
 * @property \App\Model\Table\FormatsTable $Formats
 */
class FormatsController extends AppController
{

    /**
     * [initialize description]
     * @return [type] [description]
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('formats', $this->paginate($this->Formats));
        $this->set('_serialize', ['formats']);
    }

    /**
     * View method
     *
     * @param string|null $id Format id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $format = $this->Formats->get($id, [
            'contain' => ['Beers']
        ]);
        $this->set('format', $format);
        $this->set('_serialize', ['format']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $format = $this->Formats->newEntity();
        if ($this->request->is('post')) {
            $format = $this->Formats->patchEntity($format, $this->request->data);
            if ($this->Formats->save($format)) {
                $this->Flash->success('The format has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The format could not be saved. Please, try again.');
            }
        }
        $this->set(compact('format'));
        $this->set('_serialize', ['format']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Format id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $format = $this->Formats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $format = $this->Formats->patchEntity($format, $this->request->data);
            if ($this->Formats->save($format)) {
                $this->Flash->success('The format has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The format could not be saved. Please, try again.');
            }
        }
        $this->set(compact('format'));
        $this->set('_serialize', ['format']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Format id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $format = $this->Formats->get($id);
        if ($this->Formats->delete($format)) {
            $this->Flash->success('The format has been deleted.');
        } else {
            $this->Flash->error('The format could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
