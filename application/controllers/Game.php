<?php 
/**
 * summary
 */
class Game extends CI_Controller
{
    public function index()
    {   
       
        
        $data ['judul']='Halaman Game';
        $this->load->view('templates/header',$data);
        $this->load->view('Game/index',$data);
        $this->load->view('templates/footer');
    }
}
 ?>