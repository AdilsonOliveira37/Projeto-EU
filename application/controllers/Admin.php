<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        if ($this->session->userdata("iduser")) 
        {
            $data = array(
                "scripts" => array(
                    "util.js",
                    "admin.js",
                ),
            );
            $this->template->show("admin.php", $data);
        }else
        { 
            $data = array(
            "scripts" => array(
                "util.js",
                "login.js",
            ),
        );
            $this->template->show('login.php', $data);
        }

    }

    public function logoff(){
        $this->session->sess_destroy();
        header("Location: " . base_url() . "admin");
    }

    public function ajax_login()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if (empty($username)) {
            $json["status"] = 0;
            $json["error_list"]["#username"] = "Usuário não pode ser vazio!";
        } else {
            $this->load->model("users_model");
            $result = $this->users_model->get_user_data($username);
            if ($result) {
                $iduser = $result->iduser;
                $password_hash = $result->password;
                if (password_verify($password, $password_hash)) {
                    $this->session->set_userdata("iduser", $iduser);
                } else {
                    $json["status"] = 0;
                }

            } else {
                $json["status"] = 0;
            }
            if ($json["status"] == 0) {
                $json["error_list"]["#btn-login"] = "Usuário e/ou senha incorretos";
            }
        }

        echo json_encode($json);

    }
    public function ajax_import_image()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso direto permitido!");
        }

        $config["upload_path"] = "./tmp/";
        $config["allowed_types"] = "gif|png|jpg";
        $config["overwrite"] = TRUE;

        $this->load->library("upload", $config);

        $json = array();
        $json["status"] = 1;

        if(!$this->upload->do_upload("image_file")){
            $json["status"] = 0;
            $json["error"] = $this->upload->display_errors("","");
        } else {
            if($this->upload->data()["file_size"] <= 1024)
            {
                $file_name = $this->upload->data()["file_name"];
                $json["img_path"] = base_url() . "tmp/" . $file_name;
            } else {
                $json["status"] = 0;
                $json["error"] = "Arquivo não deve ser maior que 1 Mb!";
            }
        }
        echo json_encode($json);
    }
}
