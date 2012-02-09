<?php
class Row extends AppModel {

	var $name = 'Row';

	var $hasMany = array(
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'row_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>