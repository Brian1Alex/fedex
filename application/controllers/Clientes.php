<?php 
    class Clientes extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('Cliente');    
        }

        public function iniClie()
        {
            $this->load->view('header');
            $this->load->view('clientes/iniClie');
            $this->load->view('footer');
        }

        public function agreClie()
        {
            $this->load->view('header');
            $this->load->view('clientes/agreClie');
            $this->load->view('footer');
        }

        public function listarClie()
        {
            $datos['clientes'] = $this->Cliente->obteCli();
            $this->load->view('header');
            $this->load->view('clientes/listarClie', $datos);
            $this->load->view('footer');
        }

        public function ubiClie()
    {
        $mapaCli["ubiCli"]=$this->Cliente->obtenerCli();
        $this->load->view('header');
        $this->load->view('clientes/ubiClie', $mapaCli);
        $this->load->view('footer');
    }



        public function guardaCli(){
            $datosNuevCli = array(
                "nom_cli" => $this->input->post('nom_cli'),
                "ape_cli" => $this->input->post('ape_cli'),
                "ciu_cli" => $this->input->post('ciu_cli'),
                "tele_cli" => $this->input->post('tele_cli'),
                "cedu_cli" => $this->input->post('cedu_cli'),
                "mail_cli" => $this->input->post('mail_cli'),
                "lati_cli" => $this->input->post('lati_cli'),
                "longi_cli" => $this->input->post('longi_cli')
            );
            if ($this->Cliente->insertar($datosNuevCli)) {
                redirect('clientes/listarClie');
            } else {
                echo "<h1>ERROR AL INSERTAR</h1>";
            }
            
        }

        public function eliminaCli($id_cli)
    {
        if ($this->Cliente->borrar($id_cli)) {
            redirect('clientes/listarClie');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }


    }
?>
