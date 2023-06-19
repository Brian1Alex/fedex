<?php
class Cliente extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertar($datos)
    {
        return $this->db->insert("cliente", $datos);
    }

    function obteCli()
    {
        $listaCli = $this->db->get("cliente");
        if ($listaCli->num_rows() > 0) {
            return $listaCli->result();
        } else {
            return false;
        }
    }

    function borrar($id_cli)
    {
        $this->db->where("id_cli", $id_cli);
        return $this->db->delete("cliente");
    }

    function obtenerCli()
    {
        $listCli=$this->db->get("cliente");
        if ($listCli->num_rows() > 0) {
            return $listCli->result();
        }
        return false;
    }
}
