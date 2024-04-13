<?php
$nome=$_POST ["Nome"];
$idade=$_POST["Idade"];
$cidade=$_POST["Cidade"];

echo "Nome: ". $nome."<br/>Idade: ". $idade."<br/>Cidade: ". $cidade;
if(isset($_POST['Estados'])) {
    $estados = $_POST['Estados'];
    foreach($estados as $estado) {
        echo "<br/>Estados que vocè visitou: ".$estado . "<br>";
    }
}
