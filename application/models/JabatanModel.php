<?php
class JabatanModel extends CI_Model
{
    public function simpan(array $data)
    {
        // proses simpan ke database
        $this->db->insert('jabatan', $data);
    }
    public function getById($id)
    {
        $data = $this->db->query("SELECT * from `jabatan` where `id` = $id;");
        return $data;
    }

    public function getAll()
    {
        $data = $this->db->query("SELECT * FROM `pegawai`  JOIN `jabatan` ON `pegawai`. `kode_jabatan`=`jabatan`.`kode`;");
        return $data;
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jabatan');
    }
    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pegawai', $data);
    }
}
