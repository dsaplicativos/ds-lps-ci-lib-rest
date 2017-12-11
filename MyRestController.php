<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/rest/RestController.php';

/**
 * Classe que implementa uma fachada (facade pattern) para a API Rest e nos permite
 * adotar uma abordagem modular para a criacao de plugins do CodeIgniter.
 */
class MyRestController extends RestController {
	public function __construct($table){
		parent::__construct();		$this->load->model($table.'Model', 'model');
	}

	public function create_post() {
		$resp = array('created'=>'your creation results that must be sent back');
		$this->response($resp, RESTController::HTTP_CREATED);
	}
	public function read_get(){
		$list = array('read'=>'Data read from db or what u want');
		$this->response($list, RESTController::HTTP_OK);
	}
	public function update(){
		$k = 1; // update ok code
		if($k) return $this->response($k, RESTController::HTTP_OK);
		else return $this->response($k, RESTController::HTTP_NOT_FOUND);
	}

	public function delete_post(){
		$k = 1; // deletion ok code
		return $this->response($k, RESTController::HTTP_OK);
	}
}
