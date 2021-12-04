<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Soal extends CI_Controller
{
	public function soal1()
	{
		$this->load->view('soal/soal1');
	}

	public function soal2()
	{
		$this->load->view('soal/soal2');
	}
	public function soal3()
	{
		$this->load->view('soal/soal3');
	}
	public function soal4()
	{
		$this->load->view('soal/soal4');
	}
	public function evaluasi()
	{
		$this->load->view('soal/evaluasi');
	}
}
