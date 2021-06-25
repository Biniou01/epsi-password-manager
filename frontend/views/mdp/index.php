<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MdpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mots de passe';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mdp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ajouter un mot de passe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mot_de_passe',
            'description',
            'date_execution',
            'adresse_site',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
