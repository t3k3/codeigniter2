<?php

class form extends CI_Controller {


    public function index(){
        echo "index";
    }

    public function kayit(){

        if ($this->input->post("isim") && $this->input->post("mail")) {
            echo $this->input->post("isim");
            echo $this->input->post("mail");
        }
        else {
            $this->load->view("kayit");
        }
    }
}

?>