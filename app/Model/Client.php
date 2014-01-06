<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 */
class Client extends AppModel {
	
	public $hasMany = 'Film';
	
}
