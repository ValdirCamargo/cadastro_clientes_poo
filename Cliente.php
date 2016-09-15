

<?php


class Cliente
{
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;

    public function ordena(){
        sort($lista);
    }
}
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
//rsort($lista);



//sort($lista);
$cliente1 = new Cliente();

/*for ($i=0;$i<count($lista);$i++ ){

    $cliente1->nome=($lista[$i]);
    $cliente1->cpf=33333333333;
    $cliente1->endereco="Rua dos loco";
    $cliente1->telefone=999999999;


 echo "<br> "."Nome:".$cliente1->nome."<br>"
     ."CPF: ".$cliente1->cpf."<br>"
     ."Telefone: ".$cliente1->telefone."<br>"
     ."Enbdereco: ".$cliente1->endereco."<br>";

 }*/
?>

<html>

	<head>
		<title>Index</title>
		<style type="text/css">
    div {
    width: auto;
				margin: 30px auto;
				border: 1px solid #999;
				padding: 25px;
				border-radius: 7px;
				box-shadow: 2px 2px 3px 1px #999;
			}
		</style>
	</head>

	<?php
	function teste() {
        ?>
        <div>
            <p>
                <?php sort($lista); ?>
            </p>
        </div>
        <?php
    }
	?>

<body>
<?php
for ($i=0;$i<count($lista);$i++ ){

    $cliente1->nome=($lista[$i]);
    $cliente1->cpf=33333333333;
    $cliente1->endereco="Rua dos loco";
    $cliente1->telefone=999999999;?>
<div>
    <form >

           <?php
           echo "<br> "."Nome:".$cliente1->nome."<br>"
                ."CPF: ".$cliente1->cpf."<br>"
                ."Telefone: ".$cliente1->telefone."<br>"
                ."Enbdereco: ".$cliente1->endereco."<br>";

        }
        ?>
        <br />
        <input type="submit" value="Ordenar..."<? sort($lista)?> />
    </form>
</div>

</body>

</html>
