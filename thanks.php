<?php 
include "header.php";

$nama = '';
$email = '';
if (isset($_POST['nama']) and isset($_POST['email'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
}

echo $twig->render('thanks.twig', [
'post' => [
    [
      'isnama' => isset($_POST['nama']),
      'isemail' => isset($_POST['email']),
    ]
  ],
'var' => [
    [
      'nama' => $nama, 
      'email' => $email,
    ]
  ],
]);