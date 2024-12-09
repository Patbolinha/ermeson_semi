<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Barbearia X</title>
    <link rel="stylesheet" href="css/css2.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>
<body>
<?php
include ("conexao.php");
$nome=$_POST['nome'];
$data=$_POST['data'];
$hora= $_POST['hora_id'];
$servico= $_POST['servico'];

$sql= "INSERT INTO agendamento(nome, data, hora_id, servico)
    VALUES('$nome', '$data', '$hora','$servico')";
    if($conexao=mysqli_query($conexao, $sql)){
        echo"cadastro realizado com sucesso";
    }
    else{
        echo"erro ao cadastra-se";
    }
?>
    <header>
        <nav>
            <ul>
                <li><a href="#home" >Home</a></li>
                <li><a href="#trabalhos">Trabalhos</a></li>
                <li><a href="#agendamento">Agendamento</a></li>
                <li><a href="#horarios">Horários</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="home">
        <h1>Ermerson Barberr</h1>
        <p>Cortes e serviços exclusivos para você!</p>
    </section>


     <!-- Carrossel -->
     <section class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/carr1.png" alt="Imagem 1"></div>
            <div class="swiper-slide"><img src="img/carr2.png" alt="Imagem 2"></div>
            <div class="swiper-slide"><img src="img/carr3.png" alt="Imagem 3"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>

    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,  // Para que o carrossel seja cíclico
            autoplay: {
                delay: 3000,  // Tempo de transição entre as imagens
                disableOnInteraction: false,  // Continua o autoplay após a interação do usuário
            },
            navigation: {
                nextEl: '.swiper-button-next',  // A seta para o próximo slide
                prevEl: '.swiper-button-prev',  // A seta para o slide anterior
            },
        });
    </script>

<section id="trabalhos" class="trabalhos">
    <h2>Nossos Trabalhos</h2>
    <div class="galeria">
        <!-- Corte Degradê -->
        <div class="item">
            <img src="img/cortebarba.png" alt="Corte Degradê">
            <h3>Corte e Barba</h3>
        </div>
        <!-- Corte Social -->
        <div class="item">
            <img src="img/pintura.png" alt="Corte Social">
            <h3>Tintura</h3>
        </div>
        <!-- Corte Moderno -->
        <div class="item">
            <img src="img/finaliza.png" alt="Corte Moderno">
            <h3>Finalização</h3>
        </div>
        <!-- Corte Low Fade -->
        <div class="item">
            <img src="img/quimica.png" alt="Corte Low Fade">
            <h3>Quimica Capilar</h3>
        </div>
        <!-- Corte High Fade -->
        <div class="item">
            <img src="img/lavacao.png" alt="Corte High Fade">
            <h3>Lavação</h3>
        </div>
        <!-- Corte Undercut -->
        <div class="item" >
            <img src="img/trancas.png" alt="Corte Undercut">
            <h3>Tranças</h3>
        </div>
    
        </div>
    </div>
</section>

           
       
        </div>
    </section>

    <section id="agendamento" class="agendamento">
        <h2>Agende seu Corte</h2>
        <form action="cad.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            
            <label for="data">Data:</label>
            <input type="date" name="data" required>

            <select name="hora_id"> 
            <option value="7:00">7:00</option>
            <option value="7:30">7:30</option>
            <option value="8:00">8:00</option>
            <option value="8:30">8:30</option>
            <option value="9:00">9:00</option>
            <option value="9:30">9:30</option>
        </select>

            <select name="servico"> 
            <option value="Corte e Barba">Corte e Barba</option>
            <option value="Tintura">Tintura</option>
            <option value="Finalização">Finalização</option>
            <option value="Química Capilar">Química Capilar</option>
            <option value="Lavagem">Lavagem</option>
            <option value="Tranças">Tranças</option>
        </select>

            <input type="submit">Agendar</input>
        </form>
    </section>

    <section id="horarios" class="horarios">
        <h2>Horários Disponíveis</h2>
        <ul>
            <li>Segunda - Sexta: 07:00 - 18:00</li>
            <li>Sábado: 09:00 - 15:00</li>
            <li>Domingo: Fechado</li>
        </ul>
        
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>Ermeson Barber</h2>
                <p>Transformando estilos desde 2024</p>
            </div>
            <div class="footer-social">
                <a href="https://www.instagram.com/seuperfil" target="_blank" class="instagram-link">
                    <img src="img/insta.png" alt="Instagram"> 
                    <span>@barbearia</span>
                </a>
            </div>
            <div class="footer-rights">
                <p>&copy; 2024 Ermerson Barber. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>   
</body>
</html>

