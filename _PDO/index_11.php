<?php 

    //  APRESENTAR OS DADOS NUMA TABELA DE HTML

    //  Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';    

    try {

        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password); 
        
        //fetchAll() - 
        $resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

        // fecha conexão
        $ligação = null;    

    } catch(PDOException $err) {

        echo 'ERRO: ' . $err->getMessage();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Aprensentar em HTML</title>
    <link rel="stylesheet" href="bootstrap.min.css">        
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <h3>Clientes:</h3>
                <hr>
               <table class="table table-bordered table-striped">
                   <!-- Início do Cabeçalho -->
                    <thead class="bg-dark text-white">   
                       <tr>
                           <th>Nome</th>
                           <th>Sexo</th>
                           <th>Data de Nascimento</th>
                           <th>E-mail</th>
                           <th>Telefone</th>
                           <th>Morada</th>
                        </tr>
                    </thead>
                    <!-- Fim do Cabeçalho -->    
                    <!-- Início dos resultados -->
                    <tbody>
                        <?php foreach($resultados as $cliente):?>
                            <tr>
                                <td><?= $cliente->nome ?></td>
                                <td><?= $cliente->sexo == 'm' ? 'masculino' : 'Feminino' ?></td>
                                <td><?= substr($cliente->data_nascimento, 0, 10) ?></td>
                                <td><?= $cliente->email ?></td>
                                <td><?= $cliente->telefone ?></td>
                                <td><?= $cliente->morada . ' - ' . $cliente->cidade ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <!-- Fim dos resultados -->
                    </table>

                    <p class="mt-3">Total de clientes: <strong><?= count($resultados) ?></strong></p>

            </div>
        </div>
    </div>

</body>
</html>