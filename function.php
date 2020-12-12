<?php 
// // Koneksi database
// 	$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari tabel mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objek result 

	// $mhs = mysqli_fetch_row($result); // mengembalikan array NUMERIC
		// var_dump($mhs[1]); // cara panggil data

	// $mhs = mysqli_fetch_assoc($result); // mengembalikan array ASSOCIATIC
		// var_dump($mhs["nama"]); // cara panggil data

	// $mhs = mysqli_fetch_array($result); // mengembalikan array apa aja
		// cara panggil bisa dengan cara array NUMERIC ataupun ASSOCIATIC

	// $mhs = mysqli_fetch_object($result); // OBJECT
		// var_dump($mhs->nama); // cara panggil data


// while ( $mhs = mysqli_fetch_assoc($result) ) {
// 	var_dump($mhs["nama"]);
// }

// membuat pesan error ketika database tidak ditemukan
// if ( !$result ) {
// 	echo mysqli_error($conn);
// };


$conn = mysqli_connect("localhost", "root", "", "programmer");


function ambildata($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$row = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

// cek apakah tombol tambah data kosong
if ( isset($_POST["submit"]) ) {
	// ambil data dari element form 
	$name = $_POST["name"];
	$photo = $_POST["photo"];

	$tambahdata = "INSERT INTO user_tb VALUES ('', '$name', '$photo', '')";
	mysqli_query($conn, $tambahdata);

	header('Location: joss.php');
	// cek data berhasil ditambah atau tidak
	// if ( mysqli_affected_rows($conn) > 0 ) {
	// 	$message = "Data berhasil ditambahkan :)";
	// 	echo "<script type='text/javascript'>alert('$message');</script>";

	// } else {
	// 	$message = "Data gagal ditambahkan. Hubungi Admin!";
	// 	echo "<script type='text/javascript'>alert('$message');</script>";
	// }
}

function hapus($id) {
   global $conn;
   mysqli_query($conn, "DELETE FROM user_tb WHERE id = $id");
	return mysqli_affected_rows($conn);
	

}

if ( isset($_POST["id"]) ) {
	// ambil data dari element form 
	$name = $_POST["name"];
	$photo = $_POST["photo"];

	$tambahdata = "INSERT INTO user_tb VALUES ('', '$name', '$photo', '')";
	mysqli_query($conn, $tambahdata);

	header('Location: joss.php');
}

?>