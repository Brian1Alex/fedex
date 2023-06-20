<?php 
    class Contactanos extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('Contacto');    
        }

        public function iniCon()
        {
            $this->load->view('header');
            $this->load->view('contactanos/iniCon');
            $this->load->view('footer');
        }
    }
