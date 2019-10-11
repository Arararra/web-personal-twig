<?php 
include "header.php";

echo $twig->render('index.twig', [
'nama' => 'M. Rama Maulana',
'panggilan' => 'Rama',
'lahir' => '09 Oktober 2002',
'alamat' => 'Jl. Tanah Merah Sayur 4 no. 32',
'foto' => 'assets/media/img/foto.jpg',
'hobi' => 'main game, koding, dan mendengarkan musik',
'quote' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercition.',
'keahlian' => [
    [
      'keahlian' => 'C++',
      'persen' => '60%',
      'skill' => 'blue',
    ],
    [
      'keahlian' => 'HTML',
      'persen' => '75%',
      'skill' => 'green',
    ],
    [
      'keahlian' => 'CSS',
      'persen' => '50%',
      'skill' => 'blue',
    ],
    [
      'keahlian' => 'JAVA',
      'persen' => '30%',
      'skill' => 'red',
    ],
    [
      'keahlian' => 'PHP',
      'persen' => '45%',
      'skill' => 'blue',
    ],
    [
      'keahlian' => 'MySQL',
      'persen' => '45%',
      'skill' => 'blue',
    ],
  ],
'portofolio' => [
    [
      'judul' => 'Web Registrasi',
      'bigpic' => 'assets\media\img\portofolio\form.png',
      'id' => '0',
    ],
    [
      'judul' => 'Web Start Up',
      'bigpic' => 'assets\media\img\portofolio\homecafe.png',
      'id' => '1',
    ],
  ],
'edukasi' => [
    [
      'tahun' => '2009-2015',
      'sekolah' => 'SD Muhammadiyah 25 Surabaya',
      'lokasi' => 'Surabaya, Indonesia',
      'gambar' => 'assets/media/img/mim25.jpg',
    ],
    [
      'tahun' => '2015-2018',
      'sekolah' => 'SMP Muhammadiyah 15 Surabaya',
      'lokasi' => 'Surabaya, Indonesia',
      'gambar' => 'assets/media/img/smpm15.png',
    ],
    [
      'tahun' => '2018-Now',
      'sekolah' => 'SMK Negeri 2 Surabaya',
      'lokasi' => 'Surabaya, Indonesia',
      'gambar' => 'assets/media/img/smkn2.jpg',
    ],
  ],
'sosmed' => [
    [
      'link' => 'https://t.me/Ararra',
      'ikon' => 'assets/media/img/ikon/telegram.svg',
    ],
    [
      'link' => 'https://www.facebook.com/profile.php?id=100040939097287',
      'ikon' => 'assets/media/img/ikon/facebook.svg',
    ],
    [
      'link' => 'https://wa.me/62895341112746',
      'ikon' => 'assets/media/img/ikon/whatsapp.svg',
    ],
    [
      'link' => 'https://www.instagram.com/mramamaulana60/?hl=id',
      'ikon' => 'assets/media/img/ikon/instagram.svg',
    ],
  ],
]);