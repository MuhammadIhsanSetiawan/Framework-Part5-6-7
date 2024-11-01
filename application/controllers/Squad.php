<?php 
/**
 * summary
 */
class Squad extends CI_Controller
{
    public function index()
    {   
       
        
        $data ['judul']='Halaman Squad';
        $this->load->view('templates/header',$data);
        $this->load->view('Squad/index',$data);
        $this->load->view('templates/footer');
    }
}
 ?>