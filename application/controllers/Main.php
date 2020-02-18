<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

//show home page
	public function index()

	{	$data['inner_page']='home';
		$this->load->view('template',$data);

	}

//show about page
	public function about($value='')
	{
		
		$data['inner_page']='about';
		$this->load->view('template',$data);
	}

//show contact page
	public function contact($value='')
	{
		$data['inner_page']='contact';
		$this->load->view('template',$data);

	}

//show post page
	public function post($value='')


	{	

		$data['todos']=$this->db->delete('todos', array('id' =>1));
		$data['todos']=$this->db->get('todos')->result();
		$data['inner_page']='post';
		$this->load->view('template',$data);

	}


// 	function delete_row()
// {
//    $this->load->view('post');

//    // Pass the $id to the row_delete() method
//    $this->mod1->row_delete($id);


//    redirect($_SERVER['HTTP_REFERER']);  
// }


// function row_delete($id)
// {
//    $this->db->where('id', $id);
//    $this->db->delete('testimonials'); 
// }








}
