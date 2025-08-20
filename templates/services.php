<?php 
    $servicesDetails = [
        [
            'title' => 'Websites e Aplicativos',
            'subtitle' => 'Desenvolvimento de interfaces',
            'img' => './assets/images/icons/Devices.png',
            'alt' => 'Icone de um computador',
        ],
        [
            'title' => 'API e banco de dados',
            'subtitle' => 'Criação de serviços do sistema',
            'img' => './assets/images/icons/HardDrives.png',
            'alt' => 'Icone de um drive',
        ],
        [
            'title' => 'DevOps',
            'subtitle' => 'Gestão e insfraestrutura da aplicação',
            'img' => './assets/images/icons/Infinity.png',
            'alt' => 'Icone do infinito',
        ],
    ];

?>


<section id="services" class="container">
        <p>Meu serviços</p>
        <p>Como posso ajudar o seu negócio?</p>

        <div class="grid grid-col-3">
            <?php foreach($servicesDetails as $services): ?>
                <div class="service-card">
                    <img src="<?= $services['img'];?>" alt="<?= $services['alt'];?>">
                    <p><?= $services['title'];?></p>
                    <p><?= $services['subtitle'];?></p>
                </div>
                <?php endforeach; ?>
        </div> <!-- serviços -->
    </section>