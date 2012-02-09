<?php 
/* SVN FILE: $Id$ */
/* NotesController Test cases generated on: 2010-04-26 04:04:36 : 1272272676*/
App::import('Controller', 'Notes');

class TestNotes extends NotesController {
	var $autoRender = false;
}

class NotesControllerTest extends CakeTestCase {
	var $Notes = null;

	function startTest() {
		$this->Notes = new TestNotes();
		$this->Notes->constructClasses();
	}

	function testNotesControllerInstance() {
		$this->assertTrue(is_a($this->Notes, 'NotesController'));
	}

	function endTest() {
		unset($this->Notes);
	}
}
?>