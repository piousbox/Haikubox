<?php 
/* SVN FILE: $Id$ */
/* Row Fixture generated on: 2010-04-26 04:13:48 : 1272273228*/

class RowFixture extends CakeTestFixture {
	var $name = 'Row';
	var $table = 'rows';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 12, 'key' => 'primary'),
		'service_name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 300),
		'host_url' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 500),
		'username' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'passphrase' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'descr' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'service_name'  => 'Lorem ipsum dolor sit amet',
		'host_url'  => 'Lorem ipsum dolor sit amet',
		'username'  => 'Lorem ipsum dolor sit amet',
		'passphrase'  => 'Lorem ipsum dolor sit amet',
		'descr'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
	));
}
?>