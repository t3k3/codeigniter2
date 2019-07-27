<?php

    class dbislem extends CI_Controller{

        public function index(){

            $query = $this->db->get("calisanlar")->result();
            
            $viewData["calisanlar"] = $query; 

            $this->load->view("calisanlar", $viewData);

        }

        public function yeni_calisan(){

            $this->load->view("yeni_calisan_ekle");

        }

        public function yeni_calisan_kaydet(){

            $eklenecek_veri = array(
                "isim" =>$this->input->post("isim"),
                "soyad" =>$this->input->post("soyad"),
                "yas" =>$this->input->post("yas"),
                "gorev" =>$this->input->post("gorev"),
                "adres" =>$this->input->post("adres"),
                "telefon" =>$this->input->post("telefon"),
                "mail" =>$this->input->post("mail"),
            );
            
            $insert = $this->db->insert("calisanlar", $eklenecek_veri);

            if ($insert > 0) {
                redirect(base_url('dbislem?islem=ok'));
            } else {
                redirect(base_url('dbislem/yeni_calisan?islem=no'));
            }
        }

        public function calisan_duzenle($id){
            $guncellenecek_calisan = $this->db->where("id", $id)->get("calisanlar")->row();
            $viewData["guncellenecek_calisan"] = $guncellenecek_calisan;
            $this->load->view("calisan_duzenle", $viewData);
        }

        public function calisan_duzenle_kaydet(){
            $guncellenecek_calisan_verisi = array(
                "isim" => $this->input->post("isim"),
                "soyad" => $this->input->post("soyad"),
                "yas" => $this->input->post("yas"),
                "gorev" => $this->input->post("gorev"),
                "adres" => $this->input->post("adres"),
                "telefon" => $this->input->post("telefon"),
                "mail" => $this->input->post("mail")
            );

            $update = $this->db->where("id", $this->input->post("id"))->update("calisanlar", $guncellenecek_calisan_verisi);
            if ($update > 0) {
                redirect(base_url("dbislem?duzenle=ok"));
                die();
            } else {
                redirect(base_url("dbislem/calisan_duzenle/".$this->input->post("id")."?duzenle=no"));
                die();
            }
        }

        public function calisan_sil($id){
            $calisan_sil = $this->db->where("id", $id)->delete("calisanlar");
            if ($calisan_sil > 0) {
                redirect(base_url('dbislem?sil=ok'));
            } else {
                redirect(base_url('dbislem?sil=no'));
            }
            
        }

    }

?>