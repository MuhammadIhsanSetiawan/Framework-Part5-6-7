<?php 
/**
 * summary
 */
class Kontak extends CI_Controller
{
    public function index()
    {   
       
        
        $data ['judul']='Halaman Kontak';
        $this->load->view('templates/header',$data);
        $this->load->view('Kontak/index',$data);
        $this->load->view('templates/footer');
    }
}
 ?>