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
?><!DOCTYPE html>
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
    <div class="flex">
                <img src="img/logo.png" alt="" width="90px">
              <a href="https://www.instagram.com/ermerson_barberr/"> <img class="img2" src="img/insta.png" alt="" width="50px" height="50px" >
</a> 
                <div class="menu">
                          <a href="#home" >Home</a>
                          <a href="#trabalhos">Trabalhos</a>
                          <a href="#agendamento">Agendamento</a>
                          <a href="#horarios">Horários</a>
                </div>  
</div>



    <section id="home" class="home">
        <h1>Ermerson Barberr</h1>
        <p>Cortes e serviços exclusivos para você!</p>
    </section>

    <div class="exemplos">
        <div class="cima">

            <div class="cima1">
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                <h1>Nossos Serviços</h1>
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                <p>Na nossa barbearia, você encontra um espaço descontraído e acolhedor, <br> feito para todos que querem cuidar do visual sem complicação.<br> Oferecemos cortes modernos, barbas bem feitas e aquele papo <br>bacana que faz a diferença no dia. Especialista em deixar você no estilo,<br> com preços acessíveis e um atendimento de primeira. Aqui, você se <br>sente em casa e sai renovado!</p>

            </div>

            <div class="cima2">
                <img src="img/ermerson2.jpg" height="400px"alt="">

            </div>

        </div>

        <div class="baixo">
            <div class="baixo1">
                <img src="img/ermerson3.jpg" width="600px" height="400px">

            </div>

            <div class="baixo2">
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                <h1>Em dúvida?</h1>
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                ㅤ
                <p>Procurando um corte ou uma barba que combinem com você? Nossa barbearia é o lugar certo! Com um ambiente simples e descontraído, <br> estamos sempre prontos para atender com atenção e capricho. Acreditamos que cuidar do visual não precisa ser complicado, por isso oferecemos serviços rápidos, de qualidade e com aquele precinho camarada. Passe por aqui e descubra como é fácil ficar no estilo sem gastar muito!</p>
            </div>


        </div>
    </div>
    <div class="cortes" id="trabalhos">
    <h1>Alguns dos nossos trabalhos</h1>
        <ul>
            <div class="cortes1">
            <li>
                <img src="img/corte1.jpg" alt="" >
            </li>
            <li>
                <img src="img/corte2.jpg" alt="" >
            </li>
        </div>
        <div class="cortes2">
            <li>
                <img src="img/corte3.jpg" alt="" >
            </li>
            <li>
                <img src="img/corte4.jpg" alt="" >
            </li>
        </div>
        </ul>
        <ul>
            <div class="cortes1">
                <li>
                    <img src="img/corte1.jpg" alt="" >
                </li>
                <li>
                    <img src="img/corte2.jpg" alt="" >
                </li>
            </div>
            <div class="cortes2">
                <li>
                    <img src="img/corte3.jpg" alt="" >
                </li>
                <li>
                    <img src="img/corte4.jpg" alt="" >
                </li>
            </div>
        </ul>
            </div>
<div id="servicos" class="trabalhos">
    <h2>Nossos serviços</h2>
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
            <h3>hidratação</h3>
        </div>
        <!-- Corte Undercut -->
        <div class="item" >
            <img src="img/trancas.png" alt="Corte Undercut">
            <h3>Tranças</h3>
        </div>
    
        </div>
    </div>
</div>

           
       
        </div>
    </div>

    <div id="agendamento" class="agendamento">
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
            <option value="Química Capilar">Quimica Capilar</option>
            <option value="Lavagem">hidratação</option>
            <option value="Tranças">Tranças</option>
        </select>

           <button>Enviar</button>
        </form>
    </div>

    <div id="localizacao" class="localizacao">
        <h1>Localização</h1>

        <iframe src="https://www.google.com/maps/embed?pb=!4v1733694772781!6m8!1m7!1sGTRQVvTmSTH1Plk3UBwURA!2m2!1d-7.040235632924939!2d-39.28969380841557!3f97.97005168359993!4f-5.974398433595638!5f0.8012599456606944" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

    <div id="horarios" class="horarios">
        <h2>Horários Disponíveis</h2>
        <ul>
            <li>Segunda - Sexta: 07:00 - 18:00</li>
            <li>Sábado: 09:00 - 15:00</li>
            <li>Domingo: Fechado</li>
        </ul>
        
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>Ermeson Barber</h2>
                <p>Transformando estilos desde 2024</p>
            </div>
            <div class="footer-social">
                <a href="https://www.instagram.com/ermerson_barberr/" target="_blank" class="instagram-link">
                    <img src="img/insta.png" alt="Instagram"> 
                    <span>@Ermeson_barber</span>
                </a>
            </div>
            <div class="footer-rights">
                <p>&copy; 2024 Ermerson Barber. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>   
</body>
</html>
