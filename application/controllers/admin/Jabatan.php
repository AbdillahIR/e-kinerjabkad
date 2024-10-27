<?php
class Jabatan extends CI_Controller
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
        // $this->load->model('JabatanModel');
        $data = [
            'page' => 'jabatan',
            'jabatan' => $this->db->get('jabatan')->result_array()
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/jabatan', $data);
        $this->load->view('admin/footer');
    }

    // bikin fungsi create
    // didalamnya menampilkan halaman tambah jabatan
    public function create()
    {
        // menetapkan rules pada masing masing inputan
        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan', 'required');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');

        // cek validasi apakah sudah dijalankan apa belum?
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'page' => 'jabatan',
                'jabatan' => ''
            );
            $this->load->view('admin/header', $data);
            $this->load->view('admin/jabatan_tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('JabatanModel');
            // parsing data dari formulir jabatan
            $data = [
                "kode" => $this->input->post('kode_jabatan'),
                "nama_jabatan" => $this->input->post('nama_jabatan'),
            ];
            $this->JabatanModel->simpan($data);

            $this->session->set_flashdata('success', 'Data telah berhasil disimpan');
            redirect(base_url('jabatan'));
        }
    }
    public function delete($id)
    {

        // proses hapus
        $this->load->model('JabatanModel');
        $this->JabatanModel->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect(base_url('jabatan'));
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan', 'required');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->model('JabatanModel');

            $data = [
                'page' => 'jabatan',
                'jabatan' => $this->db->get_where('jabatan', ["id" => $id])->row_array()
            ];

            $this->load->view('admin/header', $data);
            $this->load->view('admin/jabatan_edit', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->model('JabatanModel');

            $data = [
                "kode" => $this->input->post('kode_jabatan'),
                "nama_jabatan" => $this->input->post('nama_jabatan'),
            ];
            $this->JabatanModel->edit($id, $data);

            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('pegawai'));
        }
    }
    public function detail($id)
    {
        $this->load->model('JabatanModel');
        $jabatan = $this->JabatanModel->getById($id)->row_array();
        $data = [
            'page' => 'jabatan',
            'jabatan' => $jabatan
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/jabatan_detail', $data);
        $this->load->view('admin/footer');
    }
}
