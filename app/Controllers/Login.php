<?php

namespace App\Controllers;
use App\Models\ModelSiswa;
use App\Models\ModelGuru;

class Login extends BaseController
{

	public function Login()
	{
		if (session('role')=='siswa') {
			return redirect()->to('/siswa');
		}
		elseif (session('role')=='guru') {
			return redirect()->to('/guru');
		}
		elseif (session('role')=='admin') {
			return redirect()->to('/admin');
		}
		return view('login');
	}
	public function gantiPassword()
	{
		return view('gantiPassword');
	}
	public function prosesLogin()
	{
		$this->guru = new ModelGuru();
		$this->siswa = new ModelSiswa();
		$username = $this->request->getVar('username');
		$pass = md5($this->request->getVar('pass'));
		$cekSiswa = $this->siswa->login($username,$pass);
		$cekGuru = $this->guru->login($username,$pass);
		if ($cekGuru>0) {
			$data=$this->guru->getGuruAdmin($username);
			if ($data['password'] == md5($username)) {
				$sess=[
					'role' => 'guru',
					'username' => $data['NIP']
				];
				session()->set($sess);
				return redirect()->to('/gantiPassword');
			}
			else {
				$sess=[
					'role' =>'guru',
					'username' => $data['NIP']
				];
				session()->set($sess);
				return redirect()->to('/guru');
			}
		}
		else if ($cekSiswa) {
			$data=$this->siswa->getSiswaAdmin($username);
			if ($data['password'] == md5($username)) {
				$sess=[
					'role' => 'siswa',
					'username' => $data['NISN']
				];
				session()->set($sess);
				return redirect()->to('/gantiPassword');
			}
			else {
				$sess=[
					'role' =>'siswa',
					'username' => $data['NISN']
				];
				session()->set($sess);
				return redirect()->to('/siswa');
			}
		}
		else if ($username=='admin' && $pass==md5('admin')) {
			$sess=[
				'role' =>'admin'
			];
			session()->set($sess);
			return redirect()->to('/admin');
		}
		else {
			session()->setFlashdata('pesan', 'Username atau Password salah');
			return redirect()->to('/login');
		}
	}

	public function simpanPassword()
	{
		$this->guru = new ModelGuru();
		$this->siswa = new ModelSiswa();
		$pass=$this->request->getVar('pass1');
		$pass2=$this->request->getVar('pass2');
		if ($pass != $pass2) {
			session()->setFlashdata('pesan', 'password tidak sama');
			return redirect()->to('/gantiPassword');
		}
		elseif ($pass==session('username')) {
			session()->setFlashdata('pesan', 'password sama dengan yang lama');
			return redirect()->to('/gantiPassword');
		}
		else {
			if(session('role')=='guru'){
				$this->guru->set('password',md5($pass))->where('NIP',session('username'))->update();
				return redirect()->to('/login');
			}
			elseif (session('role')=='siswa') {
				$this->siswa->set('password',md5($pass))->where('NISN',session('username'))->update();
				return redirect()->to('/login');
			}
		}
	}

	public function Logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
