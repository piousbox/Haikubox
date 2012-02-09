<?php
class RowsController extends AppController {

    var $name = 'Rows';
    var $helpers = array('Html', 'Form');
    var $paginate = array(
            'limit' => 500,
            'order' => array(
                            'Row.id' => 'asc'
            )
    );


    function index() {
        $this->Row->recursive = 0;
        $this->set('rows', $this->paginate());
    }

    function search() {
//            pr($this->data);
        $needle = $this->data['Row']['search'];

        $conditions = array();
        if($this->data['Row']['search_service_name']==1) {
            $conditions['service_name LIKE'] = "%$needle%";
        }
        if($this->data['Row']['search_host_url']==1) {
            $conditions['host_url LIKE'] = "%$needle%";
        }
        if($this->data['Row']['search_username']==1) {
            $conditions['username LIKE'] = "%$needle%";
        }
        if($this->data['Row']['search_passphrase']==1) {
            $conditions['passphrase LIKE'] = "%$needle%";
        }
        if($this->data['Row']['search_descr']==1) {
            $conditions['descr LIKE'] = "%$needle%";
        }

        $search_result = $this->Row->find('all',array(
                'conditions'=>array('OR'=>$conditions)
        ));
        $this->set('rows',$search_result);

    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid Row.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('row', $this->Row->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Row->create();
            if ($this->Row->save($this->data)) {
                $this->Session->setFlash(__('The Row has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Row could not be saved. Please, try again.', true));
            }
        }
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Row', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->Row->save($this->data)) {
                $this->Session->setFlash(__('The Row has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Row could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Row->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for Row', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Row->del($id)) {
            $this->Session->setFlash(__('Row deleted', true));
            $this->redirect(array('action'=>'index'));
        }
    }

}
?>