<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Knowledge extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/** ------------------------------------------------------- **
	 **           MANDATORY SCRIPT
    /** ------------------------------------------------------- **/
	public function index()
	{
		$this->load->view('header');
		$this->load->view('Knowledge');
		$this->load->view('footer');
	}
	public function details()
	{
		$this->load->view('header');
		$this->load->view('Knowledge_details');
		$this->load->view('footer');
	}
}