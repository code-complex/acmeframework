<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* --------------------------------------------------------------------------------------------------
*
* Model teste_Model
* 
* 
*
* Generated by application module maker.
*
* @since 	04/08/2014
* @author 	leandro.w3c@gmail.com
*
* --------------------------------------------------------------------------------------------------
*/
class teste_Model extends CI_Model {
	// Definição de Atributos
	
	/**
	* __construct()
	*/
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	* example()
	* Model example method. When some controller invoke by the call 
	* $this->teste_Model->example(), this method will be triggered.
	* @return void
	*/
	public function example()
	{
		// How to manipulate queries
		/*
		$sql = "SELECT * FROM table";
		$data = $this->db->query($sql)->result_array();
		*/
	}
}