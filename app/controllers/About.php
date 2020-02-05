<?php 

class About extends Controller
{
	public function index()
	{
		$data = $this->model('User_model')->getUser();
		$data['title'] = 'About Index';
		//var_dump($data);
		$this->view('templates/header',$data);
		$this->view('about/index',$data);	
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['title'] = 'About Page';
		$this->view('templates/header',$data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}