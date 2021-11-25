<?php
$conn = mysqli_connect("localhost","root","","db_latihan_lsp");

function query ($data) {
    global $conn;

    $result = mysqli_query($conn,$data);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }

    return $rows;
};

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM daftar_siswa WHERE ID = $id");

    return mysqli_affected_rows($conn);

};

function tambah ($data){
    global $conn;
    $nis = htmlspecialchars($data['NIS']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO daftar_siswa VALUE ('','$nis','$nama','$kelas','$jurusan','$alamat')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
};

function edit($data){
    global $conn;
    $id = $_GET['id'];
    $nis = htmlspecialchars($data['NIS']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $alamat =  htmlspecialchars($data['alamat']);

    $query = "UPDATE daftar_siswa SET 
        NIS='$nis',
        nama='$nama',
        kelas='$kelas',
        jurusan='$jurusan',
        alamat='$alamat'
        WHERE ID=$id        
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function login($data){
    global $conn;
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $result = mysqli_query($conn,"SELECT * FROM login WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $rows = mysqli_fetch_assoc($result);

        if(password_verify($password,$rows['password'])){
            $_SESSION['submit'] = TRUE;
        }
    }
    return $_SESSION;
}

function register($data){
    global $conn;

    $username = stripslashes($data['username']);
    $password = mysqli_real_escape_string($conn,$data['password']);
    $password1 = mysqli_real_escape_string($conn,$data['password1']);

    if($password != $password1){
        echo "<script>
        alert ('konfirmasi password tidak sesuai !');
        </script>";
        return false;
    }

    $encript = password_hash($password,PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO login VALUE ('','$username','$encript')");

    return mysqli_affected_rows($conn);
}
?>