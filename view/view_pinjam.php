<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pinjam Buku</title>
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
            .sidebar{
                width: 20%;
                height: 100%;
                position: fixed;
                background:linear-gradient(120deg,#c97200, #ff3300);
                top: 0;
                left: 0;

            }
            .sidebar h1{
                font-size: 20px;
                text-align: center;
                padding: 30px 0;
                color:white;
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
                background-color: #8e44ad;
            }
            .main{
                margin-left: 20%;
                background:#8e44ad ;
                padding: 10px;
            }
            .main h1{
                font-size: 50px;
                text-align: center;
                padding: 10px 0;
                color:white;
            }
            table, tr, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class ="sidebar">
            <h1>PINJAM BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu"><li><a href="main_page.php">Kembali</a></li></div>
            </ul>
        </div>

        <div class="main">
            <h1>Buku Tersedia</h1>
            <div class="katalog">
                <table>
                    <?php
                        $num = 1; 
                        // &jml=".$row["db_jumlahbuku"]."&id=".$row["id_buku"]."
                        while($row = $this->ml->fetch($data)){
                            echo "
                                <tr>
                                    <td class='tab_num'>".$num."</td>
                                    <td class='tab_judulbuku'>".$row["db_judulbuku"]."</td>
                                    <td class='tab_penulisbuku'>".$row["db_penulisbuku"]."</td>
                                    <td class='tab_tahunbuku'>".$row["db_tahunterbit"]."</td>
                                    <td class='tab_durasi'>".$row["durasi"]."</td>
                                    <td class='tab_pinjam'>".$row["db_tanggalpinjam"]."</td>
                                    <td class='tab_kembali'>".$row["db_tanggaldurasi"]."</td>
                                    <td class='tab_kembalikan'>".$row["db_statuspinjam"]."</td>
                            ";
                            $num++;

                            if ($row["db_statuspinjam"]==0) {
                                echo "
                                        <td class='tab_kembalikanBuku'><a 
                                        href='main_pinjam.php?kembali
                                        &buku=".$row["id_buku"]."
                                        &id=".$row["id_pinjam"]."
                                        &jml=".$row["db_jumlahbuku"]."
                                        &tgl=".$row["db_tanggaldurasi"]."'
                                        >KEMBALIKAN</a></td>
                                    </tr>
                                    
                                ";
                            } else {
                                echo "
                                        <td class='tab_kembalikanBuku'>SUDAH DIKEMBALIKAN</a></td>
                                    </tr>
                                ";
                            }

                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
    
</html>