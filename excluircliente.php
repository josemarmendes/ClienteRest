
<html>
        <h1>Excluir Cliente </h1>
        <form method="DELETE">
            Id do Cliente:
            <input type="text" name="id"><br/> 
            <br/>
            <input type="submit" value="Excluir Cliente">
    
        </form>


<?php

    //Variáveis
    $id = intval($_GET["id"]);
    //Chamada ao serviço rest
    //URL do serviço
    $url = "http://localhost:8080/EventoREST/evento/service/excluircliente/$id";
    //Inicializa cURL para uma url.
    $ch = curl_init($url);
    //Marca que vai receber String
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    //curl_setopt($ch, CURLOPT_POST, true);
    //Inicia a conexão
    $resposta = curl_exec($ch);
    //Fecha a conexão
    curl_close($ch);
    //Imprime o $resultado
    //echo "Um cliente: " . $resposta;
 ?> 
 
</html
