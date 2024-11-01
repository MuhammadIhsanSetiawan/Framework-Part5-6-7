<?php

class Member extends CI_Controller
{

    public function __construct()
    {
    	parent::__construct();
        $this->load->model('Member_model');
    
    }
	 public function index()
	{
		$data['judul'] = 'Halaman member';
		    $data['member']=$this->Member_model->getAllMember();
            if($this->input->post('keyword'))
                $data['member']= $this->Member_model->cariDataMember();
            
		    $data['user']=$this->Member_model->getAllUser();
        $this->form_validation->set_rules('Nickname','Nickname','required');
        $this->form_validation->set_rules('Role','Role','required');
        $this->form_validation->set_rules('Rank','Rank','required');
        $this->form_validation->set_rules('User','User','required');
        if($this->form_validation->run()==false){    
    	$this->load->view('templates/header',$data);
    	$this->load->view('member/index',$data);
    	$this->load->view('templates/footer');
        }else {
            $data=[
            	'Nickname' => $this->input->post('Nickname'),
                'Role' => $this->input->post('Role'),
                'Rank' => $this->input->post('Rank'),
                'User' => $this->input->post('User'),
                  
            ];
            $this->db->insert('member',$data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('member');
        }
    }

    public function Ubah()
    {
        $this->Member_model->ubahDataMember($id);
        $this->session->set_flashdata('flash','diubah');
        redirect('member');
    }
    public function hapus($id)
    {
        $this->Member_model->hapusDataMember($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('member');
    }
 }