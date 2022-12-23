<?php 

    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "db_20241013");

    // query
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    //tambah
    function tambah ($data){
        global $conn;
        // ambil data dari form
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan= htmlspecialchars ($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // membuat query insert 
        $query = "INSERT INTO tabel_mahasiswa
                    VALUES ('','$nama','$nim','$jurusan','$email','$gambar')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//ubah
function ubah ($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data ["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan= htmlspecialchars ($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // query insert data
     $query = "UPDATE tabel_mahasiswa SET
                nama='$nama',
                nim='$nim',
                jurusan='$jurusan',
                email='$email',
                gambar='$gambar'
                WHERE id=$id";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>