<?php 
include "header.php";

$id = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

echo $twig->render('portofolio.twig', [
'gets' => [
    [
      'id' => $id
    ]
  ],
'portofolio' => [
    [
      'label' => ['PHP','HTML','CSS'],
      'judul' => 'Web Registrasi',
      'deskripsi' => 'Form dan tabel yang terhubung ke server basis data MySQL.',
      'bigpic' => 'assets\media\img\portofolio\form.png',
      'bigcaption' => 'Tampilan dari web registrasi.',
      'smallpic' => ['assets\media\img\portofolio\afterform.png','assets\media\img\portofolio\tabel.png'],
      'smallcaption' => ['Halaman yang muncul ketika registrasi berhasil.','Tabel yang menampilkan data dari database MySQL.'],
      'selesai' => '17 Juli 2019',
      'id' => '0',
    ],
    [
      'label' => ['HTML','CSS'],
      'judul' => 'Web Start Up',
      'deskripsi' => 'Web start-up untuk coffee shop.',
      'bigpic' => 'assets\media\img\portofolio\homecafe.png',
      'bigcaption' => 'Halaman awal dari web cafe.',
      'smallpic' => ['assets\media\img\portofolio\aboutcafe.png','assets\media\img\portofolio\menucafe.png','assets\media\img\portofolio\contactcafe.png'],
      'smallcaption' => ['Bagian tentang cafe.','Bagian menu cafe.','Bagian kontak cafe.'],
      'selesai' => '17 Juli 2019',
      'id' => '1',
    ],
  ],
]);