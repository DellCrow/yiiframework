<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <?php echo Html::img('@web/images/yii_logo.png') ?>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>PHP</h2>

                <p>Yii é um framework PHP. Portanto, certifique-se de ler e entender a referência da linguagem.
                    Quando estiver desenvolvendo com Yii, você estará escrevendo código orientado a objetos, então,
                    certifique-se de que está familiarizado tanto com Classes e Objetos como com namespaces.</p>


            </div>
            <div class="col-lg-4">
                <h2>Prog. orientada a objetos</h2>

                <p>É necessário ter conhecimentos básicos de programação orientada a objetos. Se você não está familizarizado
                    com esse tipo de programação, acesse um dos muitos tutoriais disponíveis.
                    Note que, quanto mais complicado for seu projeto ou aplicação, mais você precisará de conceitos avançados
                    de POO (Programação Orientada a Objetos) para ser bem sucedido em tratar essa complexidade.</p>


            </div>
            <div class="col-lg-4">
                <h2>Composer</h2>

                <p>Yii usa extensivamente o gerenciador de pacotes mais utilizado do PHP, o Composer, então certifique-se de
                    ler e entender seu guia. Se você não tem familiaridade com a linha de comando é hora de começar a experimentar.
                    Quando tiver aprendido o básico, nunca mais vai querer trabalhar sem ela.</p>


            </div>
        </div>

    </div>
</div>