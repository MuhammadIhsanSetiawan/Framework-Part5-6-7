<?php 
/**
 * Summary of mahasiswa
 */
class mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['judul']='Halaman mahasiswa';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }
}
 ?>