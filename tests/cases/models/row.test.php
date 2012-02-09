<?php 
/* SVN FILE: $Id$ */
/* Row Test cases generated on: 2010-04-26 04:13:48 : 1272273228*/
App::import('Model', 'Row');

class RowTestCase extends CakeTestCase {
	var $Row = null;
	var $fixtures = array('app.row', 'app.note', 'app.note');

	function startTest() {
		$this->Row =& ClassRegistry::init('Row');
	}

	function testRowInstance() {
		$this->assertTrue(is_a($this->Row, 'Row'));
	}

	function testRowFind() {
		$this->Row->recursive = -1;
		$results = $this->Row->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Row' => array(
			'id'  => 1,
			'service_name'  => 'Lorem ipsum dolor sit amet',
			'host_url'  => 'Lorem ipsum dolor sit amet',
			'username'  => 'Lorem ipsum dolor sit amet',
			'passphrase'  => 'Lorem ipsum dolor sit amet',
			'descr'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		));
		$this->assertEqual($results, $expected);
	}
}
?>