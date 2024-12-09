<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Preta e Cinza</title>
    <link rel="stylesheet" href="css/agendamento.css">
    <style>
 body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .table-container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #333;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #444;
            color: #fff;
        }
        tr:nth-child(odd) {
            background-color: #555;
            color: #fff;
        }
        tr:hover {
            background-color: #222;
        }
        H1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons button {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .action-buttons .edit {
            background-color: #4CAF50;
            color: white;
        }
        .action-buttons .delete {
            background-color: red;
            color: white;
        }
        .action-buttons button:hover {
            opacity: 0.8;
        }
        
       
    
    </style>
</head>
<body>
<?php
  $pesquisa = $_POST['busca'] ?? '';
  include "conexao.php";
  $sql = "SELECT * FROM agendamento where nome LIKE '%$pesquisa%'";
  $dados = mysqli_query($conexao, $sql);
  ?>
    <div class="table-container">
        <table>
            <H1>Agenda de cortes</H1>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>data</th>
                    <th>horario</th>
                    <th>serviço</th>
                    <th>ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($linha =  mysqli_fetch_assoc($dados)) {
              $id = $linha['id'];
              $nome = $linha['nome'];
              $data = $linha['data'];
              $horario = $linha['hora_id'];
              $servico = $linha['servico'];
             
              echo" <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$data</td>
                    <td>$horario</td>
                    <td>$servico</td>
                    <td width= 150px>
                    <div class='action-buttons'>
                    <a href='editar.php? id=$id' class='btn btn-success btn-sm'><button class='edit'>Editar</button></a>

                    <a href='#' class='btn_btn-danger _btn-sm' data-tOggle='modal' data-target='#confirma'
                    onclick=".'"'."pegar_dados($id, '$nome')".'"'."><button class='delete'>Excluir</button></a>
                    </div>

                     </td>
                   
                </tr>";
            }
              
            
              ?>
                
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">CONFIRMAR EXCLUSÃO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  action="excluir.php" method="post">
                      <p>Tem certeza que deseja excluir o cadastro de <b id="nome_pessoa">   </b>?</p>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                      <input type="hidden" name="nome" id="nome_pessoa1" value="">
                      <input type="hidden" name="id" id="cod_pessoa" value="">
                      <input type="submit" class="btn btn-primary" value="Sim">
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                function pegar_dados(id,nome){
                  document.getElementById("nome_pessoa").innerHTML = nome;
                  document.getElementById("nome_pessoa1").value = nome;
                  document.getElementById("cod_pessoa").value = id;
                }
                </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
