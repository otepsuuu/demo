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
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	public function beforeFilter(){
		$this->Auth->allow(array(''));
	}
	public function index() {
		$name = $this->request->query('name');
		$username = $this->request->query('username');
		$email = $this->request->query('email');
		$search = array($name, $username, $email);
		if($search){
			$data=$this->User->find('all', array('conditions'=> array(
				'AND'=> array('User.name like'=>'%'.$name.'%', 'User.email like'=>'%'.$email.'%', 'User.username like'=>'%'.$username.'%',))));
		}
		else{
			$data=$this->User->find('all', array('conditions'=> array(User.name)));
			
		}
		//$data2=$this->Student->find('first', array('conditions'=> array("id"=>2)));
		$this->set('data', $data);
		$this->set(array('name'=>$name, 'email'=>$email, 'username'=>$username,));
		
	}

	public function details($option,$id=null){ 
		$validate=1;
		if($this->request->is(array('patch', 'post', 'put'))) {
			//add info
				if ($option=='add'){
					$validate='';
					$this->User->create();
					if($this->request->data['User']['password']==$this->request->data['User']['retypepassword']){
						$this->request->data['User']['password']=AuthComponent::password($this->request->data['User']['password']);
						$validate=1;
						$id=null;
					}
					else{
						$validate=0;
						$this->Session->setFlash(__('<div class="alert alert-danger alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Password not matched.</div>'));
					}
				}
				if ($validate==1){
					if ($option=='edit'){
						$data=$this->User->findById($id);
						$directory = WWW_ROOT . 'img\users';
						unlink($directory.DS.$data['User']['image_file']);
					}
					//fileupload
					$filename = '';
					$uploadData = $this->data['User']['image_file'];
					if ( $uploadData['size'] == 0 || $uploadData['error'] !== 0) { 
					return false;
					}
					$filename = basename($uploadData['name']);
					$uploadFolder = WWW_ROOT. 'img/users';  
					$filename =  'IMG_'.rand().'-'.$filename; 
					$uploadPath =  $uploadFolder . DS . $filename;
					if( !file_exists($uploadFolder) ){
					mkdir($uploadFolder); 
					}
					if (!move_uploaded_file($uploadData['tmp_name'], $uploadPath)) {
					return false;
					}
					$this->request->data['User']['image_file']=$filename;

					($this->User->save($this->request->data))? 
					$this->Session->setFlash(__('<div class="alert alert-success alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Account saved.</div>')): 
					$this->Session->setFlash(__('<div class="alert alert-danger alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Failed to saved.</div>'));
					$this->redirect('index');
				}
				
			}
			//edit info
			if ($option=='edit') {
				$data=$this->User->findById($id);
				$this->request->data=$data;
				$validate=1;
			}
			//delete
			if($option=='delete'){
				$data = $this->User->findById($id);
				$directory = WWW_ROOT . 'img\users';
				if(unlink($directory.DS.$data['User']['image_file']))  
				{
					$this->Session->setFlash(__('<div class="alert alert-success alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Deleted successfully.</div>'));
				}
				else {
					$this->Session->setFlash(__('<div class="alert alert-success alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					The file cant be deleted</div>'));
				}
				$this->request->data = $data;
				$this->User->id=$id;
				$this->User->delete();
				$this->redirect('index');
			}
			$this->set('id', $id);
	}

	public function information($id){
		$data=$this->User->find('first', array('conditions'=> array('id'=>$id)));
		$this->set('data', $data);
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				//$this->redirect( '/users' );
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('<div class="alert alert-warning alert-dismissible fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			Username or password is incorrect.</div>'));
		}
	}

	public function logout(){
		$this->Auth->logout();
		$this->redirect('login');
	}


}
