<?php
class DokumentasiModel extends CI_Model
{
    public function simpan(array $data)
    {
        $this->db->simpan('kegiatan', $data);
    }
}
