<?php
class PermohonanModel extends CI_Model
{
    public function simpan(array $data)
    {
        $this->db->simpan('pengajuan', $data);
    }

    public function getById($id)
    {
        $data = $this->db->query("SELECT * FROM  `permohonan` where `id` = $id;");
        return $data;
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengajuan');
    }
    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pegawai', $data);
    }
}
