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
            <h1>IDENTITAS BUKU</h1>
            <div class="katalog">
                <?php while($row = $this->ml->fetch($data)){
                    echo "
                        <h2>Nama Buku</h2>
                        <p>".$row["db_judulbuku"]."</p>
                        <h2>Penulis</h2>
                        <p>".$row["db_penulisbuku"]."</p>
                    ";
                }?>
            </div>
        </div>
    </body>
    
</html>