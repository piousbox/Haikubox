<?php 
/* SVN FILE: $Id$ */
/* Note Fixture generated on: 2010-04-26 04:04:30 : 1272272670*/

class NoteFixture extends CakeTestFixture {
	var $name = 'Note';
	var $table = 'notes';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 12, 'key' => 'primary'),
		'date' => array('type'=>'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'body' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'row_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 12),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'date'  => 1,
		'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'row_id'  => 1
	));
}
?>