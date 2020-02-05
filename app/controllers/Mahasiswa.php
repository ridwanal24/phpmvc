<?php 

class Mahasiswa extends Controller
{
	private $mhs;

	public function __construct()
	{
		$this->mhs = $this->model('Mahasiswa_model');
	}

	public function index()
	{
		$data['title'] = 'Mahasiswa';
		$data['mahasiswa'] = $this->mhs->get_all();

		$this->view('templates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('templates/footer',$data);
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mahasiswa'] = $this->mhs->get_detail($id);

		$this->view('templates/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('templates/footer',$data);	
	}

	public function tambah()
	{
		if ($this->mhs->add_data($_POST) > 0) {
			header("location:{BASE_URL}mahasiswa");
			exit;
		}
	}
}