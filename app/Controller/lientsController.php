<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 */
class lientsController extends AppController {
	
	public function index() 
	{
		$data = $this->Client->find('all');
		$this->set('$clients', $data);
	}
		
	public function view() 
	{
		
	}
		
	public function add() 
	{
		
	}
	
	public function edit() 
	{
		
	}
		
	public function search() 
	{
		
	}
	
	public function _countClients() 
	{
		
	}
	
	
}