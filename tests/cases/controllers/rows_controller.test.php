<?php 
/* SVN FILE: $Id$ */
/* RowsController Test cases generated on: 2010-04-26 04:04:43 : 1272272683*/
App::import('Controller', 'Rows');

class TestRows extends RowsController {
	var $autoRender = false;
}

class RowsControllerTest extends CakeTestCase {
	var $Rows = null;

	function startTest() {
		$this->Rows = new TestRows();
		$this->Rows->constructClasses();
	}

	function testRowsControllerInstance() {
		$this->assertTrue(is_a($this->Rows, 'RowsController'));
	}

	function endTest() {
		unset($this->Rows);
	}
}
?>