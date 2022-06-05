<?php
class login extends CI_Controller{
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('login/index');
        $this->load->view('layouts/footer');
    }
    public function auth(){
        $username = $this->input->post('username');
        $passwoard = $this->input->post('passwoard');

        if ($username == 'admin' && $passwoard == 'admin') {
            $userdata =[
                "username" => $username,
                "logged_in" => TRUE,
            ];
            $this->session->set_userdata($userdata);
            redirect('/matakuliah');
            redirect('/mahasiswa');
            redirect('/dosen');
        
        } 
        elseif ($username == 'mahasiswa' && $password == 'mahasiswa') {
            $userdata = [
                "username" => $username,
            ];
            $this->session->set_userdata($userdata);
            redirect('/matakuliah');
            redirect('/mahasiswa');
            redirect('/dosen');
        }
        else {
            redirect('/login');
        }
    }
    public function logout(){
        $this->session->session_destroy();
        redirect('/login');
    }

}
?>