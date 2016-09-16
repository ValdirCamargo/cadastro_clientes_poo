<html>

<head>
    <title>Index</title>
    <style type="text/css">
        body{
            background-color: lightskyblue;
        }
        div {
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
    </style>
</head>


<body>
<div>
    <h1> Cadastro dos Usuarios</h1>

    <?php require_once "Cadastro_cliente.php";
    $cliente1 = new Cadastro_cliente();
for ($i=0;$i<count($lista);$i++ ){
    $cliente1->nome=($lista[$i]);
    $cliente1->cpf=33333333333;
    $cliente1->endereco="Rua dos loco";
    $cliente1->telefone=999999999;?>

    <form >

        <?php echo "<br> ".'<hr size=3 width=100% align=right color="0000">'."Nome:".$cliente1->nome."<br>"
            ."CPF: ".$cliente1->cpf."<br>"
            ."Telefone: ".$cliente1->telefone."<br>"
            ."Enbdereco: ".$cliente1->endereco."<br>";
        }
        ?>
         <br />
        <form action="Cadastro_cliente.php" method=get >
            <input type=submit value='ordena' />
        </form>
</div>

</body>

</html>
