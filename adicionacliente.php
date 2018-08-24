<html>
<h1>Cadastro de Cliente</h1>
 
 <form method="POST">
        Cpf do Cliente:
        <input type="text" name="cpf"><br/> 
        <br/>
        Nome do Cliente:
        <input type="text" name="nomeCliente"><br/> 
        <br/>
        <input type="submit" value="Salvar">
    
 </form>
 
 
 <?php

// Your ID and token

if(isset($_POST["cpf"])){


 $cpf = $_POST["cpf"];
 $nomeCliente = $_POST["nomeCliente"];

// The data to send to the API
$postData = array(
    'cpf' => $cpf,
    'nomeCliente' => $nomeCliente
);

// Setup cURL
$ch = curl_init('http://localhost:8080/EventoREST/evento/service/adicionacliente');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        //'Authorization: '.$authToken,
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

// Send the request
$response = curl_exec($ch);

// Check for errors
    if($response === FALSE){
        die(curl_error($ch));
    }

// Decode the response
$responseData = json_decode($response, TRUE);

// Print the date from the response
//echo $responseData['published'];
}   else {
        echo 'Formulário vazio';
}
 ?>
 
 </html>
