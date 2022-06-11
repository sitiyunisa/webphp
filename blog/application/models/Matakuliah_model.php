<?php
class Matakuliah_model extends CI_Model {
    public $id;
    public $nama;
    public $sks;
    public $kode;

    public function getAll(){
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO matakuliah (nama, sks, kode) VALUES (?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE matakuliah SET nama=?, sks=?, kode=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        $sql = "DELETE FROM matakuliah WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>