<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class StudentsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $helpers = array('Html', 'Session');
	public $components = array('Session');

	public function beforeFilter(){
		$this->Auth->allow(array(''));
	}
	
	//homepage
	public function index() {
		$name = $this->request->query('name');
		$email = $this->request->query('email');
		$address = $this->request->query('address');
		$search = array($name, $email, $address);
		if($search){
			$data=$this->Student->find('all', array('conditions'=> array(
				'AND'=> array('Student.name like'=>'%'.$name.'%', 'Student.email like'=>'%'.$email.'%', 'Student.address like'=>'%'.$address.'%',))));
		}
		else{
			$data=$this->Student->find('all');
			
		}
		//$data2=$this->Student->find('first', array('conditions'=> array("id"=>2)));
		$this->set('data', $data);
		$this->set(array('name'=>$name, 'email'=>$email, 'address'=>$address,));
	}

	//Student details
	public function information($id){
		//$data=$this->Student->find('first', array('conditions'=> array('id'=>$id)));
		$data=$this->Student->findById($id);
		$this->set('data', $data);
	}

	//Add, edit or delete student info
	public function details($option,$id=null)
	{
		if($this->request->is(array('post', 'put'))) {
		//add info
			if ($option=='add'){
				$this->Student->create();
			}
			($this->Student->save($this->request->data))? $this->Session->setFlash('Information Saved.'): $this->Session->setFlash('Failed') ;
			$this->redirect('index');
		}
		//edit info
		if ($option=='edit') {
			$data=$this->Student->findById($id);
			$this->request->data=$data;
		}
		//delete
		if($option=='delete'){
			$this->Student->id=$id;
			$this->Student->delete();
			$this->Session->setFlash('Deleted Successfully!');
			$this->redirect('index');
		}
		$this->set('id', $id);

		/* Sir Ryan code approach
		if($this->request->is(array('post', 'put'))) {
			if($option=='add') $this->Student->create();

			if(!$this->Student->save($this->request->data)) {
				$this->Session->setFlash('Failed');
			}
			else {
				$this->Session->setFlash('Information Saved.');
			}
			$this->redirect('index');
		}

		if($option=='edit') {
			$data=$this->Student->findById($id);
			$this->request->data=$data;
		}
		
		$this->set('id', $id);*/
	}


	//CODE PER PAGE
	//Add student information
	public function add_student() {
		if($this->request->is('post')) {
			$this->Student->create();
			if($this->Student->save($this->request->data)) {
				$this->redirect('index');
			}
		}
	}

	//Edit student information
	public function edit($id) {
		$data=$this->Student->findById($id);
		if($this->request->is(array('post', 'put'))) {
			$this->Student->id=$id;
			if($this->Student->save($this->request->data)) {
				$this->redirect('index');
			}
		}
		$this->request->data=$data;
	}

	//Delete student information
	public function delete($id){
		$this->Student->id=$id;
		$this->Student->delete();
		$this->Session->setFlash('Deleted Successfully!');
		$this->redirect('index');
	}
}
