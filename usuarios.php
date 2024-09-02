<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        * {
            
            padding-right:10px;
            justify-content:center;
        }
        ul {
            display: flex;
            flex-direction: row; 
            list-style: none;
            background-color: gray;
        }

        li {
            padding: 5px;
        }


        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            background-color: white;
            color: black;
            padding: 8px;
            transition: 250ms;
        }
        main{
            display: flex;
            margin: 10px;
            padding: 10px;
        }
        img{
            width: 190px;
        }
        #imagem{
            /* background-color: lightblue; */
            /* width:"20%"; */
            /* height:"20%"; */
        }
        #dados{
            background-color: white;
            width: 80%;
            height: 50%;
            color: black;
            border: 1px solid;
            border-radius: 10px;
            padding: 0px;
            padding-top:0px;
        }
        span{
            color: black;
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
        }
        p{
            background-image: linear-gradient(gray, white);
            padding: 15px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
            <img src="imagem.jpg">
        </div>
        <div id="dados">
            <p>
            <?php
                include "conecta.php";
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while($registro = mysqli_fetch_assoc($resultado)) {
                        echo "<span> ID: </span>". $registro["id"];
                        echo "<span> Nome: </span>". $registro["nome"];
                        echo "<span> E-mail: </span>". $registro["email"];
                        echo "<br>";
                    }
                }
            ?>
            </p>
        </div>
    </main>

</body>

</html>