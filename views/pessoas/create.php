<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PessoasModel */

$this->title = 'Adicionar uma Pessoa';
$this->params['breadcrumbs'][] = ['label' => 'Pessoas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>