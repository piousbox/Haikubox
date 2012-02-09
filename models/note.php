<?php
class Note extends AppModel {

	var $name = 'Note';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Row' => array(
			'className' => 'Row',
			'foreignKey' => 'row_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>