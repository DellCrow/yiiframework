<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PessoasModel */

$this->title = 'Atualizar os dados da Pessoa ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pessoas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pessoas-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>