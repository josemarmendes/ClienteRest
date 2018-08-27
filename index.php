<html>
<h1>Buscar Eventos </h1>
 <form method="GET">
        Nome do Evento:
        <input type="text" name="nomeDoEvento"><br/> 
        <br/>
        <input type="submit" value="Buscar Evento">
    
 </form>
 
 <!--<h1>Buscar Eventos pelo id do Cliente</h1>
 <form method="GET">
        Código do Cliente:
        <input type="text" name="idCliente"><br/> 
        <br/>
        <input type="submit" value="Buscar Evento">
    
 </form>-->
 
 <h2>Json retornado do Servidor</h2>

<?php

    //Variáveis
   
    $nomeDoEvento = $_GET["nomeDoEvento"];
    //Chamada ao serviço rest
    //URL do serviço
    $url = "https://eventorest2018.herokuapp.com/EventoREST/evento/service/clienteporevento/$nomeDoEvento";
    //Inicializa cURL para uma url.
    $ch = curl_init($url);
    //Marca que vai receber String
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Inicia a conexão
    $resposta = curl_exec($ch);
    //Fecha a conexão
    curl_close($ch);
    //Imprime o $resultado
    echo "Um cliente: " . $resposta;
 ?> 
 
 <br/>
 
 <?php

    //Variáveis
   
    $nomeDoEvento = $_GET["nomeDoEvento"];
    //Chamada ao serviço rest
    //URL do serviço
    $url = "https://eventorest2018.herokuapp.com/EventoREST/evento/service/todososclientesporevento/$nomeDoEvento";
    //Inicializa cURL para uma url.
    $ch = curl_init($url);
    //Marca que vai receber String
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Inicia a conexão
    $resposta = curl_exec($ch);
    //Fecha a conexão
    curl_close($ch);
    //Imprime o $resultado
    echo "Todos os clientes: " . $resposta;
 ?> 
 
 <?php

    /*//Variáveis
    $idCliente = $_GET["idCliente"];
    //Chamada ao serviço rest
    //URL do serviço
    $url = "https://eventorest2018.herokuapp.com/EventoREST/evento/service/clienteporeventoid/$idCliente";
    //Inicializa cURL para uma url.
    $ch = curl_init($url);
    //Marca que vai receber String
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Inicia a conexão
    $resposta = curl_exec($ch);
    //Fecha a conexão
    curl_close($ch);
    //Imprime o $resultado
    echo "Um cliente: " . $resposta;*/
 ?> 
 
</html
