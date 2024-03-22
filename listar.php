<?php 
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo, "r");
echo "<table border=1>";
while(!feof($arquivo)){
    $linha = fgets($arquivo, 1000);
    if($linha != ""){
        $conteudo = explode(";",$linha);
        echo "<tr>";
        echo "<td>$conteudo[0]</td>";
        echo "<td>$conteudo[1]</td>";
        echo "</tr>";

    }
}
echo "</table>";
fclose($arquivo);
?>