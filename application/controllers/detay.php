<?php

class Detay extends CI_Controller {

    public function index() {

        $personel_listesi = array(
            array(
                "isim" => "ali"
            ),
            array(
                "isim" => "veli"
            )
            );

        $viewData["personel_listesi"] = $personel_listesi;

        $this->load->view("vodafone", $viewData);

    }


    public function tek($param1) {

        $tekvar["tekvar"] = $param1;

        $this->load->view("vodafone", $tekvar);

    }
    

    public function getParams($param1, $param2) {
        echo $param1;
        echo "<br>";
        echo $param2;

    }

    public function isle(int $sayi1, int $sayi2, string $islem) {
        if ($islem == "topla") {
            echo $sayi1 + $sayi2;
        }
        if ($islem == "cikar") {
            echo $sayi1 - $sayi2;
        }
    }

    public function getParameters() {
        
        $s1 = $this->uri->segment(1);

        echo $s1;
    
    }

}