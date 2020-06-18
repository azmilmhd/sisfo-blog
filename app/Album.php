<?php 

namespace app;
class Album extends Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_album 
		JOIN tb_photos ON tb_album.photo_id = tb_photos.photo_id";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	public function tambah()
	{
		
		$nama = $_POST['album_name'];
		$ket = $_POST['album_ket'];
		$photo = $_POST['photo_id'];

		$sql = "INSERT INTO tb_album (album_name, album_text, photo_id) VALUES
			(:album_name, :album_text, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $nama);
		$stmt->bindParam(":album_text", $ket);
		$stmt->bindParam(":photo_id", $photo);
		
		$stmt->execute();

		return false;
	}


	public function edit($id)
	{
		$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$nama = $_POST['album_name'];
		$ket = $_POST['album_ket'];
		$photo = $_POST['photo_id'];
		$id = $_POST['album_id'];

		$sql = "UPDATE tb_album SET album_name=:album_name, album_text=:album_text, photo_id=:photo_id WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":album_name", $nama);
		$stmt->bindParam(":album_text", $ket);
		$stmt->bindParam(":photo_id", $photo);
		$stmt->bindParam(":album_id", $id);

		$stmt->execute();

		return false;
	}

	public function hapus($id)
	{
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>