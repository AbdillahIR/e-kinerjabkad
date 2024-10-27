<?php

class Permohonan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('id')) {
            $this->session->set_flashdata('failed', 'Silahkan anda login terlebih dahulu');
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data = [
            'page' => 'pengajuan',
            'pengajuan' => $this->db->get('pengajuan')->result_array()
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/permohonan');
        $this->load->view('admin/footer');
    }
    public function create()
    {
        // menetapkan rules pada masing masing inputan
        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('proposal_kegiatan', 'Proposal Kegiatan', 'required');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('keterangan_kegiatan', 'Keterangan Kegiatan', 'required');

        // cek validasi apakah sudah dijalankan apa belum?
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'page' => 'permohonan',
                'permohonan' => ''
            );
            $this->load->view('admin/header', $data);
            $this->load->view('admin/permohonan_tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('PermohonanModel');
            // parsing data dari formulir jabatan
            $data = [
                "nama_kegiatan" => $this->input->post('nama_kegiatan'),
                "proposal_kegiatan" => $this->input->post('proposal_kegiatan'),
                "tgl_mulai" => $this->input->post('tgl_mulai'),
                "tgl_selesai" => $this->input->post('tgl_selesai'),
                "keterangan_kegiatan" => $this->input->post('keterangan_kegiatan'),
            ];
            $this->PermohohanModel->simpan($data);

            $this->session->set_flashdata('success', 'Data telah berhasil disimpan');
            redirect(base_url('permohonan'));
        }
    }
    public function delete($id)
    {
        // proses hapus
        $this->load->model('PermohonanModel');
        $this->PermohonanModel->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect(base_url('permohonan'));
    }
}
