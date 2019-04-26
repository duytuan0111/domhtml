<?php 
/**
 * 
 */
class Domhtml extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('test_view');
	}
	public function view2()
	{
		$this->load->view('test_view_2');
	}
	public function view3()
	{
		$this->load->view('list_tour');
	}
    public function view4()
    {
    	$this->load->view('inf_tour');
    }
}


 ?>