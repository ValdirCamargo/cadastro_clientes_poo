<html>

<head>
    <title>Index</title>
    <style type="text/css">
        body{
            background-color: lightskyblue;
            }
        div.oi {
            background-color: white;
            width: 700px;
            height: 300px;
            overflow: auto;
            position: fixed;
            top: 20%;
            left: 25%;
            margin-top: 0px;
            align-content: center;
            border: 1px solid #999;
            padding:30px;
            border-radius: 7px;
            box-shadow: 2px 2px 3px 1px #999;
        }
        div h1{
            width: auto;
            margin-top: 0px;
            overflow: auto;
            padding-left: 175px;
            color:#999999;
        }
        div.sai{
            display: none;
        }
        div.sai a{
            display: block;
        }


    </style>
</head>



<body>
<div class="oi">
    <h1> Cadastro dos Usuarios</h1>


    <?php require_once "Cliente.php";

    $lista = array(
      "Gessica",
        "Jose",
           "Jurema",
             "Zuleica",
                "Ana",
                 "Jose",
                    "Joao",
                     "Vitor",
                        "Tizil",
                            "Armani");

    require_once "index.php";
    if(isset($_POST["botao"])) {
        sort($lista);
    }else if(isset($_POST["botao2"])){
        rsort($lista);
    }
    ?>
        <p><h3> Clique para ordenar em ordem alfabetica ou vice versa<h3> </p>

        <form action="index.php" method="post">
            <input type="submit" value=Ordenar   name="botao">
            <input type="submit" value=Desordena name="botao2">
        </form>

<?php
    $cliente1 = new Cliente();
    $j = 0;
    for ($i=0;$i<count($lista);$i++ ){
        $cliente1->nome=($lista[$i]);
        $cliente1->cpf=33333333333;
        $cliente1->endereco="Rua dos loco";
        $cliente1->telefone=999999999;?>



        <?php
        echo "<br>"
            .'<hr size=3 width=100% align=right color="0000">'.
            '<select> <option>Nome: '.
            $cliente1->nome."</option><br>"
            ."<option>CPF: "
            .$cliente1->cpf."</option><br>"
            ."<option>Telefone: "
            .$cliente1->telefone
            ."</option><br>"
            ."<option>Enbdereco: "
            .$cliente1->endereco
            ."<br></select></option>";
        }
        ?>

</div>
</body>
</html>
