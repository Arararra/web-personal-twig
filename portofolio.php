<?php 
include "header.php";
include "data.php";

$id = '';
$portfolio = null;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // jika indexnya ditemukan sesuai id
  if (isset($data['portofolio'][$id])) {
    $portfolio = $data['portofolio'][$id];
  }
}

// var_dump($portfolio);
echo $twig->render('portofolio.twig', [
  'portfolio' => $portfolio
]);