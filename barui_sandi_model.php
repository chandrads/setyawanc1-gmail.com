<?php

class barui_sandi_model extends CI_Model
{

    function perbarui($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

?>