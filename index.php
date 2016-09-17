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
    $cliente1 = new Cliente();
    $j = 0;
for ($i=0;$i<count($lista);$i++ ){
    $cliente1->nome=($lista[$i]);
    $cliente1->cpf=33333333333;
    $cliente1->endereco="Rua dos loco";
    $cliente1->telefone=999999999;?>

    <form >

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




        </form>
</div>


</body>

</html>
