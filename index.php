<!DOCTYPE html>
<html lang=pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divino - Doces Finos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Bitter', serif;
        }
        header {
            height: 187px;
            background-color:#DD6A00;
            text-align: center;
            padding: 10px;
        }
        .logo {
            height: 140px;
        }
        nav {
            background-color: #FFAD93;
            margin: 0;

        }
        nav ul {
            list-style: none;
            width: 100%;
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            padding: 12px;
            padding-bottom: 12px;
            padding-left: 25px;
            padding-right: 25px;
        }
        .content {
            min-height: 400px;
        }
        footer {
            background-color: #FFAD93;
            min-height: 60px;
            padding: 40px;
        }
        .container{
            max-width: 800px;
            display: flex;
            margin: auto;
            padding-top: 30px;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div>
        <header>
            <img src="images/logo-branco.png" alt="" class="logo">
        </header>
        <nav>
            <ul>
                <li>Home</li>
                <li>Quem Somos</li>
                <li>Contato</li>
                <li>Localização</li>
            </ul>
        </nav>
        <div class="content">
            <div class="container">
            <?php 
                include('pages/home.php')
            ?>
            </div>            
        </div>
        <footer>
            Footer
        </footer>
    </div>   
</body>
</html>