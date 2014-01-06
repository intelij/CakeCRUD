<?php

App::uses('AppController', 'Controller');

class FilmsController extends AppController {
	
	public function index() 
	{
		$this->set('color', 'red');
	}
	
}