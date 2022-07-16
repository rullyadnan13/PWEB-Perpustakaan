<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Katalog Buku</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
                border: 0px;               
            }
            body{
                font-family: 'Poppins', sans-serif;
                box-sizing: border-box;
            }
            table{
                border-collapse: collapse;
	            border-spacing: 0;
            }
            .sidebar{
                width: 20%;
                height: 100%;
                position: fixed;
                background: linear-gradient(120deg,#c97200, #ff3300);
                top: 0;
                left: 0;

            }
            .sidebar h1{
                font-size: 20px;
                text-align: center;
                padding: 30px 0;
            }
            .sidebar ul li{
                list-style: none;
                width: 100%;
                padding: 20px;
            }
            .sidebar ul li a{
                text-decoration: none;
                color: white;
            }
            .sidebar ul li a:hover{
                color: white;
            }
            .menu:hover{
                background-color: red;
            }
            .main{
                margin-left: 20%;
                /* background-color: yellow; */
                padding: 10px;
            }
            .main h1{
                font-size: 50px;
                text-align: center;
                padding: 10px 0;
                background-color: green;
            }
            .main table{
                margin: 10px 0;
                width: 100%;
                
                border: none;
            }
            .main table tr td{
                padding: 4px;
            }
            input{
                border: 1px solid red;
                padding: 3px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class = "sidebar">
            <h1>KATALOG BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu">
                    <li><a href="main_catalogue.php">Kembali</a></li>
                </div>
            </ul>
        </div>

        <div class="main">
            <h1>PEMINJAMAN</h1>
            <div class="katalog">
                <?php
                    $jml;
                    $id;
                    while($row = $this->ml->fetch($data)){
                        echo "
                            <center><h2>Identitas Buku</h2></center>
                            <form action='' method='post'>
                                <label for=''>Judul Buku</label><br>
                                <input type='text' name='judulBuku' id='' disabled value='".$row['db_judulbuku']."'><br>
                                <label for=''>Penulis Buku</label><br>
                                <input type='text' name='penulisBuku' id='' disabled value='".$row['db_penulisbuku']."'><br>
                                <label for=''>Penerbit Buku</label><br>
                                <input type='text' name='penerbitBuku' id='' disabled value='".$row['db_penerbitbuku']."'><br>
                                <label for=''>Tahun Buku</label><br>
                                <input type='text' name='tahunBuku' id='' disabled value='".$row['db_tahunterbit']."'><br>
                        ";
                        $jml = $row["db_jumlahbuku"];
                        $id = $row["id_buku"];
                    }
                    if ($jml == 0){
                        echo "BUKU TIDAK TERSEDIA";
                    } else {
                        // echo "Jumlah buku= $jml <br> $id <br>";
                        echo "
                                <label for=''>Durasi Pinjam (Hari)</label><br>
                                <input type='number' name='durasiPinjam' id='' min='1' max='7'><br>
                                <input type='submit' name='inp_submit' id='' value='Cek Peminjaman'>
                                </form>
                        ";
                        if (isset($_POST["inp_submit"])) {
                            date_default_timezone_set('Asia/Jakarta');
                            $tglSekarang = new DateTime(date("Y-m-d")); 
                            $tglSekarang = $tglSekarang->format("Y-m-d");
                            $tglSekarangStr = strtotime($tglSekarang);
                            $durasi = $_POST["durasiPinjam"];
                            $tglKembali = date("Y-m-d", strtotime("+".$durasi."day", $tglSekarangStr));
                            echo '<br>Durasi Pinjam: ' .$durasi.' Hari<br>';
                            echo 'Tanggal Pinjam: ' .$tglSekarang.'<br>';
                            echo 'Tanggal Kembali: ' .$tglKembali.'<br>';
                            echo "<br><a href='main_catalogue.php?tambahPinjam&id=".$id."&durasi=".$durasi."&tglpinjam=".$tglSekarang."&tglkembali=".$tglKembali."'>PINJAM SEKARANG</a>";
                        }

                    }
                    

                    
                ?>
            </div>
        </div>
    </body>
    
</html>