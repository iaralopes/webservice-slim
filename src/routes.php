<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/filmes', function (Request $request, Response $response, array $args) {

		$newResponse = $response->withHeader('Content-type', 'application/json')
            	->withHeader('Access-Control-Allow-Origin', '*')
            	->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            	->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "meus_filmes";


		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error){
		     echo "Erro";
		 }

        $sql = "SELECT titulo, sinopse FROM tbl_filmes;";


	   $result = $conn->query($sql);
			
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$titulo = utf8_encode($row["titulo"]);
					$sinopse = utf8_encode($row["sinopse"]);
					
					$resultado[] = array(
						"titulo" => $titulo,
						"sinopse" => $sinopse,
					);
				}
			}else{
				return 0;
			}

		return $newResponse->withJson($resultado, 201);

});



$app->get('/filmes/{id}', function (Request $request, Response $response, array $args) {

		$newResponse = $response->withHeader('Content-type', 'application/json')
            	->withHeader('Access-Control-Allow-Origin', '*')
            	->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            	->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        $get_id = $request->getAttribute('id');

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "meus_filmes";


		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error){
		     echo "Erro";
		 }

        $sql = "SELECT titulo, sinopse FROM tbl_filmes WHERE id = $get_id;";


	   $result = $conn->query($sql);
			
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$titulo = utf8_encode($row["titulo"]);
					$sinopse = utf8_encode($row["sinopse"]);
					
					$resultado[] = array(
						"titulo" => $titulo,
						"sinopse" => $sinopse,
					);
				}
			}else{
				return 0;
			}

		return $newResponse->withJson($resultado, 201);

});






$app->delete('/filmes/{id}', function (Request $request, Response $response, array $args) {

		$get_id = $request->getAttribute('id');

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "meus_filmes";


		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error){
		     echo "Erro";
		 }


        $sql = "DELETE FROM tbl_filmes WHERE id = $get_id;";
        $result = $conn->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }

});