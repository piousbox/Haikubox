<?php 
/* SVN FILE: $Id$ */
/* Note Test cases generated on: 2010-04-26 04:04:30 : 1272272670*/
App::import('Model', 'Note');

class NoteTestCase extends CakeTestCase {
	var $Note = null;
	var $fixtures = array('app.note', 'app.row');

	function startTest() {
		$this->Note =& ClassRegistry::init('Note');
	}

	function testNoteInstance() {
		$this->assertTrue(is_a($this->Note, 'Note'));
	}

	function testNoteFind() {
		$this->Note->recursive = -1;
		$results = $this->Note->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Note' => array(
			'id'  => 1,
			'date'  => 1,
			'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'row_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>