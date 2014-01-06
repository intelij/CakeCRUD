<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 * @property PaginatorComponent $Paginator
 */
class ClientsController extends AppController {
	
	public $components = array('Session');
	
	
	
	public function index() 
	{
		$this->set('user', 'Khululekani');
		$data = $this->Client->find('all', array('order' => 'name'));
		$count = $this->Client->find('count');
		
		$info = array(
						'clients'	=> $data,
						'count'		=> $count
					 );
		
		$this->set($info);
					 
		// $this->set('clients', $data);
		// $this->set('count', $count);
			
	}
	
	public function add() {
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('Data Added'));
				$this->redirect('index');
			} else {
				$this->Session->setFlash(__('Error adding the data'));
			}
		}
		
	}
	
	
	public function edit($id = null) {
		
		if (!$id) 
		{
			throw new NotFoundException(__("ID was not set"));
		}
		
		$data = $this->Client->findById($id);
		
		if (!$data) 
		{
			throw new NotFoundException(__("ID was not found in the database"));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
	
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('Item updated'));
				$this->redirect('index');
			} else {
				$this->Session->setFlash(__('Error adding the data'));
			}
		}
		
		$this->request->data = $data;
		
	}
	
	
	
	public function view($id = null) {
		
		if (!$id) 
		{
			throw new NotFoundException(__("ID was not set"));
		}
		
		$data = $this->Client->findById($id);
		
		if (!data) 
		{
			throw new NotFoundException(__("ID was not found in the database"));
		}
		
		$this->set('client', $data);
	}
	
	public function delete($id = null) 
	{
		$this->Client->id = $id;
		
		if (!$id || !$this->Client->exists()) 
		{
			throw new NotFoundException(__("ID was not set"));
		}
		
		// $this->Client->delete($id);
		
		if ($this->request->is('post')) 
		{
			if ($this->Client->delete()) {
				$this->Session->setFlash(__("The Item has been deleted"));
			} else {
				$this->Session->setFlash(__("The item was not deleted!"));
			}
		} else {
			$this->Session->setFlash(__("Sorry not hackable!"));
		}
		
		
		$this->redirect('index');
		
		
	}

}


			