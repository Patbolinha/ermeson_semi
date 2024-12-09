<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css2.css">
</head>
<body>
<?php
    include ("conexao.php");
    $id = $_GET["id"] ?? '';
    $sql= "SELECT * FROM agendamento WHERE id = $id";

    $dados= mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>
<section id="agendamento" class="agendamento">
        <h2>Agende seu Corte</h2>
        <form action="editcard.php" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" required value="<?php echo $linha['nome'];?>">
            
            <label for="data">Data:</label>
            <input type="date" name="data"required value="<?php echo $linha['data'];?>">

            <select name="hora_id" required value="<?php echo $linha['hora_id'];?>"> 
            <option value="7:00">7:00</option>
            <option value="7:30">7:30</option>
            <option value="8:00">8:00</option>
            <option value="8:30">8:30</option>
            <option value="9:00">9:00</option>
            <option value="9:30">9:30</option>
        </select>

            <select name="servico" required value="<?php echo $linha['servico'];?>"> 
            <option value="Corte e Barba">Corte e Barba</option>
            <option value="Tintura">Tintura</option>
            <option value="Finalização">Finalizacao</option>
            <option value="Química Capilar">Quimica Capilar</option>
            <option value="Lavagem">Lavagem</option>
            <option value="Tranças">Trancas</option>
        </select>

            <input type="submit">Agendar</input>
            <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
        </form>
    </section>
</body>
</html>