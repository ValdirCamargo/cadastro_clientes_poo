
<html>
<head>
    <title>Pessoa Juiridica</title>
    <link href="css/stylo.css" rel="stylesheet">

</head>
<body>

<div class="navbar-header">
    <center>
        <a class="navbar-brand" href="index.html">Home</a> </div>
    </center>
        <div class="oi">
            <h1> Cadastro dos Usuarios Juridicos</h1>


        <?php require_once "ClienteJuridica.php";

            $lista2 = array(
                "JULIA",
                "TOM",
                "BERENICE",
                "JOSEFA",
                "YAIOI",
                "SAORI",
                "CLOVES",
                "VALDIR",
                "CLEIDE",
                "PATRICIA");

            require_once "juridico.php";
            if(isset($_POST["botao"])) {
                sort($lista2);
            }else if(isset($_POST["botao2"])){
                rsort($lista2);
            }
        ?>
<p><h3> Clique para ordenar em ordem alfabetica ou vice versa<h3> </p>

<form action="juridico.php" method="post">
    <input type="submit" value=Ordenar   name="botao">
    <input type="submit" value=Desordena name="botao2">
</form>

<?php
$cliente2 = new ClienteJuridica();
$j = 0;
for ($i=0;$i<count($lista2);$i++ ){
    $cliente2
        ->setNome($lista2[$i])
        ->setInscri($i+3333+$i+33333)
        ->setEndereco("Rua dos loco")
        ->setTelefone($i+9999+$i+99999)
        ->setJuri("Cliente Juridico");
    ?>



    <?php
    echo "<br>"
        .'<hr size=3 width=100% align=right color="0000">'.
        '<select> <option>Nome: '.
        $cliente2
            ->getNome()."</option><br>"
        ."<option>Inscricao: "
        .$cliente2
            ->getInscri()."</option><br>"
        ."<option>Telefone: "
        .$cliente2
            ->getTelefone()
        ."</option><br>"
        ."<option>Enbdereco: "
        .$cliente2
            ->getEndereco()
        ."<br></select></option>"
        .$cliente2
            ->getJuri()
        ."<br></select></option>";
}
?>

</div>

</body>
</html>
