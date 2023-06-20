<?php
class Pedido extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertar($datos)
    {
        return $this->db->insert("pedido", $datos);
    }

    function obtePed()
    {
        $listaPed = $this->db->get("pedido");
        if ($listaPed->num_rows() > 0) {
            return $listaPed->result();
        } else {
            return false;
        }
    }

    function borrar($id_ped)
    {
        $this->db->where("id_ped", $id_ped);
        return $this->db->delete("pedido");
    }

    function obtenerPed()
    {
        $listPed=$this->db->get("pedido");
        if ($listPed->num_rows() > 0) {
            return $listPed->result();
        }
        return false;
    }
}
