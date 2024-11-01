<?php 

  /**
   * summary
   */
    class Member_model extends CI_model{
        public function getAllMember()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get->('member');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggil data base
        return $this->db->get('member')->result_array();
        
    }

        public function getAllUser()
        
        {
            return $this->db->get('user')->result_array();

        }

        public function cariDataMember()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('Nickname', $keyword);
            $this->db->or_like('Role', $keyword);
            $this->db->or_like('Rank', $keyword);
            return $this->db->get('member')->result_array();
        }
        
        public function ubahDataMember()
        {
            $data= [
                "Nickname" => $this->input->post('Nickname', true),
                "Role" => $this->input->post('Role', true),
                "Rank" => $this->input->post('Rank', true),
                "User" => $this->input->post('User', true),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('member',$data);
        }
        
        public function hapusDataMember($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('member');

        }
    }