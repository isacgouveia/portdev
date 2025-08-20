<?php 
    $projetos = [
        [
            'title' => 'Travelgram',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-01.png',
            'alt' => 'Projeto Travelgram',
            'subtitle' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'stack' => ['PHP', 'HTML', 'CSS'],
        ],
        [
            'title' => 'Tech News',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-02.png',
            'alt' => 'Projeto Tech News',
            'subtitle' => 'Homepage de um portal de notícias sobre a área de tecnologia',
            'stack' => ['PHP', 'HTML', 'CSS'],
        ],
        [
            'title' => 'Página de Receita',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-03.png',
            'alt' => 'Projeto Cupcake Café',
            'subtitle' => 'Página com o passo a passo de uma receita para cupcakes',
            'stack' => ['HTML', 'CSS'],
        ],
        [
            'title' => 'Zingen',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-04.png',
            'alt' => 'Projeto Zingen',
            'subtitle' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
            'stack' => ['HTML', 'CSS'],
        ],
        [
            'title' => 'Refund',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-05.png',
            'alt' => 'Projeto Refund',
            'subtitle' => 'Um sistema para pedido e acompanhamento de reembolso',
            'stack' => ['PHP', 'HTML', 'CSS', 'JavaScript'],
        ],
        [
            'title' => 'Página de Turismo',
            'IMG_src' => './assets/images/thumbnails/Thumbnail_Project-06.png',
            'alt' => 'Projeto Turismo',
            'subtitle' => 'Página com as principais informações para quem quer viajar para Busan',
            'stack' => ['PHP', 'HTML', 'CSS'],
        ],
    ];

?>


<section id="case">
            <p>Meu trabalho</p>
            <p>Veja os projetos em destaque</p>

            <div class="show-case">
                <div class="card grid grid-col-3 gap-24px">
                    <?php foreach($projetos as $projeto): ?>
                        <figure>
                            <img src="<?= $projeto['IMG_src'];?>" alt="Projeto TravelGram">
                            <figcaption>
                                <h3><?= $projeto['title'];?></h3>
                                <p class="subtitle-1"><?= $projeto['subtitle'];?></p>
                                
                                <div class="flex gap-1 mt-1">

                                        <?php 
                                        $color = ['blue', 'red', 'yellow', 'green', 'purple'];
                                        foreach($projeto['stack'] as $colorPosition => $stacks ): ?>
                                            <span class="bg-<?= $color[$colorPosition]?>-600 px-1 rounded-1 font-<?= $color[$colorPosition]?>-900 font-bold">
                                                <?= $stacks ?>
                                            </span>
                                        <?php endforeach;?>
                                    </div>
                            </figcaption>
                        </figure>

                    <?php endforeach; ?>

                </div>
            </div>
        </section> <!-- Case -->