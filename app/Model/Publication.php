<?php
App::uses('AppModel', 'Model');
/**
 * Publication Model
 *
 */
class Publication extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'publication_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'publication_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'publication_id' => array(
			'blank' => array(
				'rule' => array('blank'),
				'on' => 'create',
			),
		),
		'publication_name' => array(
			'words' => array(
				'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
				'message' => 'Publication name can only contain letters, numbers and spaces',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Publication name must not be empty',
			),
			'maxlength' => array(
				'rule' => array('maxlength', 100),
				'message' => 'Publication name must not be longer than 100 characters',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This Publication name already exists.',
			),
		),
	);
	
	 /**
	 * hasMany associations
	 *
	 * @var array
	 */
		public $hasMany = array(
			'PublicationIssues' => array(
				'className' => 'Issue',
				'foreignKey' => 'issue_publication_id',
			)
		);
	
}
