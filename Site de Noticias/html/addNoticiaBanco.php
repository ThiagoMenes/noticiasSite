<?php include_once"config.php";?>
<?php
$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];
$fonte = $_POST['fonte'];

//criando a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//checar a conexão
if (!$conn){
    die("Conexão falhou:" .mysqli_connect_error());
}

echo "Conectado com sucesso";
$sql = "INSERT INTO noticias (titulo,corpo,fonte) VALUES ('$titulo', '$corpo', '$fonte')";

if (mysqli_query($conn, $sql)){
    header(("location: index.php"));
}else{
    echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>

