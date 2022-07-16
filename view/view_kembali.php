<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PENGEMBALIAN</title>
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
                background: linear-gradient(120deg,#c97200, #ff3300);;
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
                background-color: #8e44ad;
                padding: 10px;
            }
            .main h1{
                font-size: 50px;
                text-align: center;
                padding: 10px 0;
                color:white;
            }
        </style>
    </head>

    <body>
        <div class = "sidebar">
            <h1>PENGEMBALIAN BUKU PERPUSTAKAAN</h1>
            <ul>
                <div class="menu"><li><a href="main_page.php">Kembali</a></li></div>
            </ul>
        </div>

        <div class="main">
            <h1>DAFTAR KEMBALI</h1>
        </div>
    </body>
    
</html>