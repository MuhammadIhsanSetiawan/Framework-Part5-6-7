<?php 
/**
 * summary
 */
class Lobby extends CI_Controller
{
    public function index()
    {   
       
        
        $data ['judul']='Halaman Lobby';
        $this->load->view('templates/header',$data);
        $this->load->view('Beranda/index',$data);
        $this->load->view('templates/footer');
    }
}
 ?>