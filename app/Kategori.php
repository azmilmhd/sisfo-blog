<?php 

namespace app;
class Kategori extends Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function tambah()
	{
		$nama = $_POST['cat_nama'];
		$ket = $_POST['cat_ket'];

		$sql = "INSERT INTO tb_category (cat_nama, cat_text) VALUES
			(:cat_nama, :cat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_nama", $nama);
		$stmt->bindParam(":cat_text", $ket);
		
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_category";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$nama = $_POST['cat_nama'];
		$ket = $_POST['cat_ket'];
		$id = $_POST['cat_id'];

		$sql = "UPDATE tb_category SET cat_nama=:cat_nama, cat_text=:cat_text WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_nama", $nama);
		$stmt->bindParam(":cat_text", $ket);
		$stmt->bindParam(":cat_id", $id);

		$stmt->execute();

		return false;
	}

	public function hapus($id)
	{
		$sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>