<?php
class Sucursal extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertar($dato)
    {
        return $this->db->insert("sucursal", $dato);
    }

    function obtenerSucu()
    {
        $listaSucu = $this->db->get("sucursal");
        if ($listaSucu->num_rows() > 0) {
            return $listaSucu->result();
        } else {
            return false;
        }
    }

    function borrar($id_suc)
    {
        $this->db->where("id_suc", $id_suc);
        return $this->db->delete("sucursal");
    }

    function ubicaSuc()
    {
        $listSuc = $this->db->get("sucursal");
        if ($listSuc->num_rows() > 0) {
            return $listSuc->result();
        } else {
            return false;
        }
    }

    function ubicaQuito()
    {
        $listaUbiSie=$this->db->select()->where('regi_suc','Sierra')->get("sucursal");
        if ($listaUbiSie->num_rows() > 0) {
            return $listaUbiSie->result();
        }
        return false;
    }

    function ubicaCosta()
    {
        $listadoUbiCos=$this->db->select()->where('regi_suc','Costa')->get("sucursal");
        if ($listadoUbiCos->num_rows() > 0) {
            return $listadoUbiCos->result();
        }
        return false;
    }

    function ubicaOrie()
    {
        $listadoUbiCos=$this->db->select()->where('regi_suc','Oriente')->get("sucursal");
        if ($listadoUbiCos->num_rows() > 0) {
            return $listadoUbiCos->result();
        }
        return false;
    }
}
