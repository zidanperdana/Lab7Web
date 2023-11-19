<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required >
        <label for="birth">Birth: </label>
        <input type="date" name="birth" id="birth" >
        <select name="jobs" id="">
            <option value="">--Select Jobs--</option>
            <option value="Doctor">Doctor</option>
            <option value="Suster">Suster</option>
            <option value="Nurse">Nurse</option>
        </select>
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['name'], $_POST['birth'], $_POST['jobs'])) {
            echo "Name: " . $_POST['name'] . "<br>";
            echo "Birth: " . $_POST['birth'] . "<br>";
            $age = floor((time() - strtotime($_POST['birth'])) / 31556926);
            echo "Age: " . $age . "<br>";
            echo "Jobs: " . $_POST['jobs'] . "<br>";
            if($_POST['jobs'] == "Doctor") {
                echo "Average salarry: Rp. 100.000.000 - Rp. 150.000.000";
            } elseif ($_POST['jobs'] == "Suster") {
                echo "Average salarry: Rp. 30.000.000 - 60.000.000";
            } elseif ($_POST['jobs'] == "Nurse") {
                echo "Average salarry: Rp. 10.000.000 - 20.000.000";
            } else {
                echo "Average salarry: Jobs not found";
            }
        }
    ?>
</body>
</html>

<?php
     //echo "hello world </br>";

     //$judul = "menggunakan variabel";
     //echo "<h2> $judul </h2>";

    //$nim = "312210463";
    //$nama = "Maulana Zidan Perdana";

    //echo "nim : " . $nim . "<br>";
    //echo "nama : $nama" . "<br>";

     //$judul = "form input";
     //echo "<h2> $judul </h2>";
    
     //$judul = "predegfine variable";
     //echo "<h2> $judul </h2>";
     //echo 'Selamat datang ' . $nama;

     //$gaji = 1000000;
     //$pajak = 0.1;
     //$thp = $gaji - ($gaji*$pajak);
    // echo "Gaji sebelum pajak = Rp. $gaji <br>";
    // echo "Gaji yang dibawa pulang = Rp. $thp";

    // $nama_hari = date("l");
    // if ($nama_hari == "Sunday") {
    // echo "Minggu";
    // } elseif ($nama_hari == "Monday") {
    // echo "Senin";
    // } else {
    // echo "Selasa";
    // }

    // $nama_hari = date("l");
    // switch ($nama_hari) {
    //     case "sunday":
    //         echo "minggu";
    //         break;
    //     case "monday":
    //         echo "senin";
    //         break;
    //     case "tuesday":
    //         echo "selasa";
    //         break;
    //     default:
    //     echo "sabtu";
    // }

    // echo "Perulangan 1 sampai 10 <br />";
    // $i=1;
    // while ($i<=10) {
    //     echo "Perulangan ke: " . $i . '<br />';
    //     $i++;
    // }

    // echo "Perulangan 1 sampai 10 <br />";
    // $i=1;
    // do {
    //     echo "Perulangan ke: " . $i . '<br />';
    //     $i++;
    // } while ($i<=10);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <button type="submit" value="kirim"> Kirim</button>
    </form>
    <?php
        
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     // Ambil nilai nama dari form
        //     $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
        
        //     // Tampilkan pesan selamat datang jika nama diisi
        //     if (!empty($nama)) {
        //         echo "Selamat datang, $nama!";
        //     } else {
        //         echo "Silakan isi nama Anda.";
        //     }
        // }
    ?>
</body>
</html> -->
