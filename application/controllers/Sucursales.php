<?php
class Sucursales extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sucursal');
    }

    public function iniSucu()
    {
        $this->load->view('header');
        $this->load->view('sucursales/iniSucu');
        $this->load->view('footer');
    }

    public function agreSucu()
    {
        $this->load->view('header');
        $this->load->view('sucursales/agreSucu');
        $this->load->view('footer');
    }

    public function listarSucu()
    {
        $dato['sucursales'] = $this->Sucursal->obtenerSucu();
        $this->load->view('header');
        $this->load->view('sucursales/listarSucu', $dato);
        $this->load->view('footer');
    }

    public function ubiSucu()
    {
        $mapaSuc["ubiQuito"]=$this->Sucursal->ubicaQuito();
        $mapaSuc["ubiCosta"]=$this->Sucursal->ubicaCosta();
        $mapaSuc["ubiOrien"]=$this->Sucursal->ubicaOrie();
        $this->load->view('header');
        $this->load->view('sucursales/ubiSucu', $mapaSuc);
        $this->load->view('footer');
    }

    public function guardaSucu()
    {
        $datosNueSucu = array(
            "nom_suc" => $this->input->post('nom_suc'),
            "tele_suc" => $this->input->post('tele_suc'),
            "ciu_suc" => $this->input->post('ciu_suc'),
            "regi_suc" => $this->input->post('regi_suc'),
            "lati_suc" => $this->input->post('lati_suc'),
            "longi_suc" => $this->input->post('longi_suc')
        );
        if ($this->Sucursal->insertar($datosNueSucu)) {
            redirect('sucursales/listarSucu');
        } else {
            echo "<h1>ERROR AL INSERTAR</h1>";
        }
    }

    public function eliminaSucu($id_suc)
    {
        if ($this->Sucursal->borrar($id_suc)) {
            redirect('sucursales/listarSucu');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }
}
