<?php

class Mahasiswa_model
{
	// private $mahasiswa = [
	// 	[
	// 		'nama' => 'Abi',
	// 		'umur' => '25',
	// 		'pekerjaan' =>'Mahasiswa'
	// 	],
	// 	[
	// 		'nama' => 'Babi',
	// 		'umur' => '52',
	// 		'pekerjaan' =>'Mahasiswa'
	// 	],
	// 	[
	// 		'nama' => 'Cubi',
	// 		'umur' => '25',
	// 		'pekerjaan' =>'Mahasiswa'
	// 	]
	// ];

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function get_all()
	{
		$this->db->query("select * from {$this->table}");
		return $this->db->resultSet();
	}

	public function get_detail($id)
	{
		$this->db->query("select * from {$this->table} where id=:id");
		$this->db->bind(':id',$id);

		return $this->db->single();
	}

	public function add_data($data)
	{
		$this->db->query("insert into {$this->table}(nama,umur,pekerjaan) values (:nama,:umur,:pekerjaan)");
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('umur',$data['umur']);
		$this->db->bind('pekerjaan',$data['pekerjaan']);
		$this->db->execute();

		return $this->db->rowCount();
	}
}