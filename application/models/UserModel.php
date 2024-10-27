<?php

class UserModel extends CI_Model
{
    public function simpan($data)
    {
        return $this->db->insert('users', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
}
