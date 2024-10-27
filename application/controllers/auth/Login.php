<?php
class Login extends CI_Controller
{
    public function index()
    {
        // mendefinisikan role validasi login
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == true) {
            // jika validasi true jalankan proses login

            // ambil masing-masing data dari formulir kemudian masukan kedalam masing masing variable
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // cek apakah email ada atau tidak?
            $email_tersedia = $this->db->get_where('users', ['email' => $email])->num_rows();

            if ($email_tersedia) {
                // jika ada ambil data user berdasarkan email dari formulir login
                $data_user = $this->db->get_where('users', ['email' => $email])->row_object();

                $password_hash_user = $data_user->password;
                // var_dump($data_user)

                if (password_verify($password, $password_hash_user)) {
                    // jika benar alihkan ke halaman dashboard

                    $this->session->set_userdata([
                        "id" => $data_user->id,
                        "nama" => $data_user->nama,
                        "email" => $data_user->email,
                    ]);


                    // bikin redirect ke halaman dashboard
                    // echo "passwird benar";
                    redirect(base_url('dashboard'));
                } else {
                    // jika password tidak sama kembalikan ke halaman login dan berikan pesan kesalahan 
                    $this->session->set_flashdata('failed', 'password yang anda masukan salah!'); //membuat pesan kesalahan

                    redirect(base_url('login'));
                }
            } else {
                // jika email tidak ada kemballi ke halaman login dan berikan pesan kesalahan
                $this->session->set_flashdata('failed', 'Email yang anda masukan tidak terdaftar!');
                redirect(base_url('login'));
            }
        } else {
            // jika validasi false tampilkan halaman login beserta eror
            $this->load->view('auth/header');
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
