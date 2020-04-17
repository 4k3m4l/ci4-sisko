<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_model extends Model
{
    protected $table = 't_user';
    public function validasi()
    {

        // grab user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $ta          = $this->input->post('ta');

        // Prep the query
        $this->db->where('u', $username);
        $this->db->where('p', $password);

        // Run the query
        $query = $this->db->get('t_user');
        // Let's check if there are any results
        if ($query->num_rows == 1) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'user' => $row->u,
                'pass' => $row->p,
                'name' => $row->nama,
                'level' => $row->level,
                'ta' => $ta,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
