<?php


class Login extends CI_Controller
{

     public function index()
     {
          $data['judul'] = 'Halaman Login';
          $this->load->view('admin/templates/admin_header', $data);
          $this->load->view('admin/login', $data);
          $this->load->view('admin/templates/admin_footer');
     }
     public function proses_login()
     {
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          $user = $this->db->get_where('user', ['email' =>$email])->row_array();
          if($user){
          if (password_verify($password, $user['password'])){
               $data =[
                    'email'=> $user['email'],
                    'password'=> $user['password'],
               ];
               $this->session->set_userdata($data);
               redirect('beranda');
          } else {
               $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">Password Salah!</div>' );
               redirect('login');
          }
       }else{
          $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert"> Email Belum Terdaftar!</div>' );
          redirect('login');
       }
     }
     public function logout() 
     {
          $this->session->unset_userdata('email');     
          $this->session->unset_userdata('password');   
          $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert"> Silahkan Login Kembali!</div>' );
          redirect('login');  
     }
}


?>