<?php 
    class Pedidos extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('Pedido');    
        }

        public function iniPedi()
        {
            $this->load->view('header');
            $this->load->view('pedidos/iniPedi');
            $this->load->view('footer');
        }

        public function agrePedi()
        {
            $this->load->view('header');
            $this->load->view('pedidos/agrePedi');
            $this->load->view('footer');
        }

        public function listarPedi()
        {
            $datos['pedidos'] = $this->Pedido->obtePed();
            $this->load->view('header');
            $this->load->view('pedidos/listarPedi', $datos);
            $this->load->view('footer');
        }

        public function desPedi()
    {
        $mapaPed["desPedi"]=$this->Pedido->obtenerPed();
        $this->load->view('header');
        $this->load->view('pedidos/desPedi', $mapaPed);
        $this->load->view('footer');
    }



        public function guardaPed(){
            $datosNuevPed = array(
                "nom_ped" => $this->input->post('nom_ped'),
                "desc_ped" => $this->input->post('desc_ped'),
                "nombre_des_ped" => $this->input->post('nombre_des_ped'),
                "lati_ped" => $this->input->post('lati_ped'),
                "longi_ped" => $this->input->post('longi_ped'),
            );
            if ($this->Pedido->insertar($datosNuevPed)) {
                redirect('pedidos/listarPedi');
            } else {
                echo "<h1>ERROR AL INSERTAR</h1>";
            }
            
        }

        public function eliminaPed($id_ped)
    {
        if ($this->Pedido->borrar($id_ped)) {
            redirect('pedidos/listarPedi');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }


    }
