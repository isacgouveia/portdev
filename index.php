<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Dev</title>

    <link rel="stylesheet" href="./assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Header -->
    <?php include('templates/header.php')?>


    <main>
    <?php include('templates/cases.php')?>
    </main>

    <section id="services" class="container">
        <p>Meu serviços</p>
        <p>Como posso ajudar o seu negócio?</p>

        <div class="grid grid-col-3">
            <div class="service-card">
                <img src="assets/images/icons/Devices.png" alt="Icone de um computador">
                <p>Websites e Aplicativos</p>
                <p>Desenvolvimento de interfaces</p>
            </div>

            <div class="service-card">
                <img src="assets/images/icons/HardDrives.png" alt="Icone de um computador">
                <p>API e banco de dados</p>
                <p>Criação de serviços do sistema</p>
            </div>

            <div class="service-card">
                <img src="assets/images/icons/Infinity.png" alt="Icone de um computador">
                <p>DevOps</p>
                <p>Gestão e insfraestrutura da aplicação</p>
            </div>
        </div> <!-- serviços -->
    </section>

    <footer>
        <p>Contato</p>
        <h3>Gostou do meu trabalho?</h3>
        <p>Entre em contato ou acompanhe as minhas redes sociais!</p>

        <div class="social-links">
            <a href="https://www.linkedin.com" class="social-button">
              <span class="icon">
                <img src="assets/images/icons/LinkedinLogo.png" alt="LinkedIn">
              </span>
              <span class="text">LinkedIn</span>
              <span class="arrow">
                <img src="assets/images/icons/ArrowUpRight.png" alt="Seta para cima">
            </span>
            </a>
          
            <a href="https://www.instagram.com" class="social-button">
              <span class="icon">
                <img src="assets/images/icons/InstagramLogo.png" alt="Instagram">
              </span>
              <span class="text">Instagram</span>
              <span class="arrow">
                <img src="assets/images/icons/ArrowUpRight.png" alt="Seta para cima">
            </span>
            </a>
          
            <a href="https://www.github.com" class="social-button">
              <span class="icon">
                <img src="assets/images/icons/GithubLogo.png" alt="GitHub">
              </span>
              <span class="text">GitHub</span>
              <span class="arrow">
                <img src="assets/images/icons/ArrowUpRight.png" alt="Seta para cima">
            </span>
            </a>
          
            <a href="mailto:seuemail@exemplo.com" class="social-button">
              <span class="icon">
                <img src="assets/images/icons/EnvelopeSimple.png" alt="E-mail">
              </span>
              <span class="text">E-mail</span>
              <span class="arrow">
                <img src="assets/images/icons/ArrowUpRight.png" alt="Seta para cima">
            </span>
            </a>
          </div>
    </footer>
</body>
</html>