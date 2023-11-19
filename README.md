# Lab7Web

# Praktikum 7: PHP Dasar

## Laporan Praktikum
  
1. Buatlah repository baru dengan nama Lab7Web.
2. Kerjakan semua latihan yang diberikan sesuai urutannya.
3. Screenshot setiap perubahannya.
4. Buatlah file README.md dan tuliskan penjelasan dari setiap langkah praktikum
beserta screenshotnya.
5. Commit hasilnya pada repository masing-masing.
6. Kirim URL repository pada e-learning ecampus
  
## Instruksi Praktikum

1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Pertanyaan dan Tugas

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

[Praktikum](/#Praktikum) | [TUGAS](/#TUGAS)

# Praktikum
## PHP Dasar

Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>PHP Dasar</title>
    </head>
    <body>
      <h1>Belajar PHP Dasar</h1>
      <?php
        echo "Hello World";
      ?>
    </body>
    </html>

Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/a90c7ce1-b6b5-4252-b0e7-0485cda9b8c2)

## Variable PHP
Menambahkan variable pada program.

    <?php
    $nim = "312210463";
    $nama = 'Maulana Zidan Perdana';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/d86fb1b7-a8eb-404d-b835-7d9c2dd52fed)

## Membuat Form Input

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>PHP Dasar</title>
    </head>
    <body>
    <h2>Form Input</h2>
    <form method="post">
      <label>Nama: </label>
      <input type="text" name="nama">
      <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
    </body>
    </html>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/3f10028b-a1e0-4b57-b18f-b25ef1fde44e)

## Operator

    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/18a965f6-d161-445a-b1aa-f3c59e3fc956)

## Kondisi IF

    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
      echo "Minggu";
    } elseif ($nama_hari == "Monday") {
      echo "Senin";
    } else {
      echo "Selasa";
    }
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/e209d571-bb38-4aeb-9b65-143b819b4858)

## Kondisi Switch

    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
      case "Sunday":
        echo "Minggu";
        break;
      case "Monday":
        echo "Senin";
        break;
      case "Tuesday":
        echo "Selasa";
        break;
      default:
        echo "Sabtu";}
    ?>
![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/7eeb842e-f8aa-478c-aefc-a0ef5bf539f0)

## Perulangan FDor

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
      echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
      echo "Perulangan ke: " . $i . '<br />';
    }
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/bbaf5ad9-c087-4c19-8e68-78085de83112)

## Perulangan while

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
      echo "Perulangan ke: " . $i . '<br />';
      $i++;
    }
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/c56c10e3-b837-42b1-aa73-d355ff58d804)

## Perulangan Dowhile

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
      echo "Perulangan ke: " . $i . '<br />';
      $i++;
    } while ($i<=10);
    ?>

![image](https://github.com/zidanperdana/Lab7Web/assets/116040175/8e164f8e-4655-46e7-b515-cdb1eddc076b)

# TUGAS 

![Screenshot 2023-11-20 011507](https://github.com/zidanperdana/Lab7Web/assets/116040175/3b62c17f-b5df-40f7-a338-140e6eb2525b)


