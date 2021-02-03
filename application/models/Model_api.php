<?php

class Model_api extends CI_Model
{

  public function tampil_anggaran(){
  return $this->db->get('jumlah_anggaran');
  }

  public function tampil_tahun(){
  return $this->db->get('tahun_rekap');
  }
// pemisah
public function edit_tahun($where,$table){
return $this->db->get_where($table,$where);
}
  public function edit_anggaran($where,$table){
  return $this->db->get_where($table,$where);
  }
  public function edit_pengeluaran($where,$table){
  return $this->db->get_where($table,$where);
  }
// pemisah

  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function tampil_detail($id_jumlah){
    $this->db->select('*');
  		$this->db->from('jumlah_anggaran as b');
  		$this->db->join('pengeluaran as a', 'a.id_jumlah = b.id_jumlah');
  		$this->db->where('a.id_jumlah',$id_jumlah);
  		$result= $this->db->get()->result_array();
  		return $result;
	}
  
}
