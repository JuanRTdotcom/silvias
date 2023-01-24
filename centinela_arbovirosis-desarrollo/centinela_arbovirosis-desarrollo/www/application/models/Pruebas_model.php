<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of User
 *
 * @author roytuts.com
 */
class Pruebas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        // $this->notiweb = $this->load->database('notiweb', TRUE);
        // $this->arbocentinela = $this->load->database('arbocentinela', TRUE);
    }


    public function getPruebas()
    {
        $this->db->db_select('arbocentinela');
        $sql = "SELECT e.denominacion as enfermedad,p.denominacion as prueba,(select count(*) from arbocenti_lab l inner join arbocenti a on a.id = l.paciente WHERE l.prueba = p.id and a.eliminado = 0 and l.estado = 1) as cantidad,p.estado FROM arbocenti_pru p 
        inner join arbocenti_enf e on e.id = p.enfermedad
        order by e.denominacion,p.denominacion";
        if (!$query = $this->db->query($sql)) {
            $error = $this->db->error();
            return array(
                'estado' => false,
                'code' => 'error',
                'message' => 'Ha ocurrido un error!',
                'description' => $error["message"]
            );
            exit();
        }

        $data = $query->result();
        $query->free_result();
        return array(
            'estado' => true,
            'data' => $data
        );
    }
    
    public function getPruebas_filtro()
    {
        $this->db->db_select('arbocentinela');
        $sql = "SELECT DISTINCT denominacion FROM `arbocenti_pru` where estado = 1 order by denominacion";
        if (!$query = $this->db->query($sql)) {
            $error = $this->db->error();
            return array(
                'estado' => false,
                'code' => 'error',
                'message' => 'Ha ocurrido un error!',
                'description' => $error["message"]
            );
            exit();
        }

        $data = $query->result();
        $query->free_result();
        return array(
            'estado' => true,
            'data' => $data
        );
    }

}
