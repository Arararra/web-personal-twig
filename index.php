<?php 
include "header.php";

echo $twig->render('index.twig', [
'profil' => [
    [
      'nama' => 'M. Rama Maulana',
      'panggilan' => 'Rama',
      'lahir' => '09 Oktober 2002',
      'alamat' => 'Jl. Tanah Merah Sayur 4 no. 32',
      'foto' => 'assets/media/img/img-profile.jpg',
      'hobi' => 'main game, koding, dan mendengarkan musik',
      'quote' => 'Never gonna give you up, never gonna let you down, never gonna run around and desert you, never gonna make you cry, never gonna say goodbye, never gonna tell a lie and hurt you.',
    ],
  ],
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
'portofolio' => [
    [
      'label' => ['PHP','HTML','CSS'],
      'judul' => 'Web Registrasi',
      'galeri' => 'database',
      'bigpic' => 'assets\media\img\portofolio\form.png',
      'bigcaption' => '',
      'smallpic' => ['assets\media\img\portofolio\afterform.png','assets\media\img\portofolio\tabel.png'],
      'smallcaption' => ['',''],
      'selesai' => '17 Juli 2019',
      'id' => '0',
    ],
    [
      'label' => ['HTML','CSS'],
      'judul' => 'Web Start Up',
      'galeri' => 'cafe',
      'bigpic' => 'assets\media\img\portofolio\homecafe.png',
      'bigcaption' => '',
      'smallpic' => ['assets\media\img\portofolio\aboutcafe.png','assets\media\img\portofolio\menucafe.png','assets\media\img\portofolio\contactcafe.png'],
      'smallcaption' => ['','',''],
      'selesai' => '17 Juli 2019',
      'id' => '0',
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