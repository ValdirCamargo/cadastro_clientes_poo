
<html>
<head>
    <title>Pessoa Fisica</title>
    <link href="../css/stylo.css" rel="stylesheet">
   
</head>
<body>

<center><div class="navbar-header">
    <a class="navbar-brand" href="index.html">Home</a> </div></center>
    <div class="oi">
        <h1> Cadastro dos Usuarios</h1>


        <?php
        define('CLASS_DIR','src/');
        set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
        spl_autoload_register();


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
    
            require_once "fisico.php";
            if(isset($_POST["botao"])) {
                sort($lista);
            }else if(isset($_POST["botao2"])){
                rsort($lista);
            }
        ?>
        <p><h3> Clique para ordenar em ordem alfabetica ou vice versa<h3> </p>

            <form action="fisico.php" method="post">
                <input type="submit" value=Ordenar   name="botao">
                <input type="submit" value=Desordena name="botao2">
            </form>

    <?php
        $cliente1 = new Cliente();
        $j = 0;
            for ($i=0;$i<count($lista);$i++ ){
                $cliente1
                    ->setNome($lista[$i])
                    ->setCpf($i-33333-$i-3333)
                    ->setEndereco("Rua dos loco")
                    ->setTelefone($i-9999-$i-99999)
                    ->setFisi("Cliente Fisica");

            echo "<br>"
                .'<hr size=3 width=100% align=right color="0000">'.
                    '<select> <option>Nome: '.
                $cliente1
                    ->getNome()."</option><br>"
                ."<option>CPF: "
                .$cliente1
                    ->getCpf()."</option><br>"
                ."<option>Telefone: "
                .$cliente1
                    ->getTelefone()
                ."</option><br>"
                ."<option>Enbdereco: "
                .$cliente1
                    ->getEndereco()
                ."<br></option>"
                ."<option>Importancia: ".
                $j=$i+1
                ."<br></select></option>"
                .$cliente1
                    ->getFisi()
                ."<br><h4>Grau de Importancia: <br>
                 1-Baixo<br> 2-Medio <br>3-Intermediario <br>4-Medio Alto <br>5-Alto</h4><br></option>";
            }
        ?>

    </div>

</body>
</html>
