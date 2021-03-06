<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $id = $_POST["id_user"];
    $nama = $_POST["nama"];
    $role = $_POST["role"];
    $availability = $_POST["availability"];
    $age = $_POST["age"];
    $location = $_POST["location"];
    $experience = $_POST["years"];
    $email = $_POST["email"];

    $sql = "UPDATE user SET nama = '$nama', role = '$role', 
    availability = '$availability', age = '$age', location = '$location', 
    years = '$experience', email = '$email' WHERE id_user = '$id'";

    // if ($koneksi->query($sql) == TRUE) {
    //     echo "Update data berhasil";
    // } else {
    //     echo "update data gagal";
    // }
}
