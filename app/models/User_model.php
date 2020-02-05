<?php 

class User_model
{
	private $user = [
		'nama' => 'Hercules',
		'umur' => '0',
		'pekerjaan' => 'Hacker Berkelas'
	];
	public function getUser()
	{
		return $this->user;
	}
}