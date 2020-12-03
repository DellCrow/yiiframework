<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar uma Pessoa', ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'email:email',
            'idade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>