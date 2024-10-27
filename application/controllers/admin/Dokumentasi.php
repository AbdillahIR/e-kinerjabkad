<?php
// bikin controller dashboard
// bikin fungsi index yang menampilkan tulisan "ini halaman dashboard"
class Dokumentasi extends CI_Controller
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
        // data untuk dikirim ke view
        $data = array(
            'page' => 'dokumentasi'
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/dokumentasi');
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('dokumentasi_kegiatan', 'Link Google Drive', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'page' => 'dokumentasi',
                'dokumentasi' => ''
            );

            $this->load->view('admin/header', $data);
            $this->load->view('admin/dokumentasi_tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model(DokumentasiModel);

            $data = [
                "dokumentasi_kegiatan" => $this->input->post('dokumentasi_kegiatan'),
            ];
            $this->DokumentasiModel->simpan($data);

            $this->session->set_flashdata('success', 'Data telah berhasil disimpan');
            redirect(base_url('dokumentasi'));
        }
    }
}
