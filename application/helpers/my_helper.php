<?php
function convDate($date)
{
    return date('d F Y', strtotime($date));
}
function panggil_username($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('user');
    foreach ($result->result() as $c) {
        $stmt = $c->username;
        return $stmt;
    }
}
function nama_karyawan($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('user');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_depan . ' ' . $c->nama_belakang;
        return $stmt;
    }
}
?>
