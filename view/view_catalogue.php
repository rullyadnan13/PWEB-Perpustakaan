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
                border-radius:0 20px 20px 0;

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
                margin-left: 10%;
                /* background-color: yellow; */
            }
            .main h1{
                font-size: 50px;
                text-align: center;
                padding: 20px 0;
                background: #8e44ad;
                color: white;
            }
            .main table{
                margin: 10px 0;
                width: 100%;
                border: none;
            }
            .main table tr td{
                padding: 4px;
            }
            .katalog{
                /* position:fixed; */
                margin-left:20%;
            }
            .judulkatalog{
                /* margin-left:10%; */
                width: 100%;
            }
            
        </style>
    </head>

    <body>
        <div class = "sidebar">
            <h1>KATALOG BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu">
                    <li><a href="main_page.php">Kembali</a></li>
                </div>
            </ul>
        </div>

        <div class="main">
            <h1>Buku Tersedia</h1>
            <div class="judulkatalog">
                <table>
                        <tr>
                        <th>Judul Buku</th>
                        <th>Penulis Buku</th>
                        <th>Jumlah Buku</th>
                        </tr> 
                </table>
            </div>
            <div class="katalog">
                <table>
                    <?php while($row = $this->ml->fetch($data)){
                        echo "

                            <tr>
                                <td class='tab_judulbuku'>".$row["db_judulbuku"]."</td>
                                <td class='tab_penulisbuku'>".$row["db_penulisbuku"]."</td>
                                <td class='tab_jumlahbuku'>".$row["db_jumlahbuku"]."</td>
                                <td class='tab_pinjambuku'><a href='main_catalogue.php?pinjam&jml=".$row["db_jumlahbuku"]."&id=".$row["id_buku"]."'>Pinjam</a></td>
                                <td class='tab_selengkapnya'><a href='main_catalogue.php?lengkap&id=".$row["id_buku"]."'>Selengkapnya</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                        ";
                        
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
    
</html>