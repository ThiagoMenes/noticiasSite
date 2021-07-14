<?php include_once"config.php";?>
<br> <br> <br> <br>


<html>
    <head>
        <meta charset="utf-8">
        <title>Notícias em Foco</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <h1>Notícias Relacionadas com sua pesquisa: </h1>
            <img src="./img/sp.jpg">
        </header>

    <main>
        <article>


<?php
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$busca1 = $_POST['busca'];
$result_titulos = "SELECT * FROM noticias WHERE titulo LIKE '%$busca1%' or corpo LIKE '%$busca1%' LIMIT 5";
$resultado_titulos = mysqli_query($conn, $result_titulos);

    while($rows_titulos = mysqli_fetch_array($resultado_titulos)){
        echo "<br><br><br> <font size='4px'><b>  " .$rows_titulos['titulo']. "</b><br><br>" .$rows_titulos['corpo']. "<br> <br>" .$rows_titulos['fonte']. "</font>";
    }

?>

</article>
<aside>
        <h6>Menu de Categorias</h6>

        <ul>
          <li><a href="index.php"><span class="negrito">Principal</span></a></li>
          <li><a href="politica.html"><span class="negrito">Política</span></a></li>
          <li><a href="educacao.html"><span class="negrito">Educação</span></a></li>
          <li><a href="saude.html"><span class="negrito">Saúde</span></a></li>
          <li><a href="addNoticia.php"><span class="negrito">Adicionar Notícia</span></a></li>
        </ul>
        <form method="POST" class="form-group col-md-4" action="busca.php">
          <input type="text" name="busca" placeholder="Buscar Notícias">
        </form>
      </aside>
    </main>

<footer>
    <p>©Copyright 2021/05/20. ~ Thiago M. Costa ~ 
        <a href = "mailto: thiago.costa@aluno.ifsp.edu.br">Fale Conosco</a</p>
</footer>