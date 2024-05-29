<?php

defined('BASEPATH') or exit('No direct script access allowed');

function get_id(){
    $ci = &get_instance();

    $q = $ci->db->query("SELECT MAX(RIGHT(id_siswa,3)) AS kd_max FROM siswa");
    $kd = "";
    $t = "GoS";
    
    if($q->num_rows()>0){
        foreach($q->result() as $k){
            $tmp = ((int)$k->kd_max)+1;
            $kd = sprintf($t."%03s", $tmp);
        }
    }else{
        $kd = "001";
    }
    
    return $kd;	
}