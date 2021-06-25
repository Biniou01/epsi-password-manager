<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mdp */

$this->title = $model->adresse_site;
$this->params['breadcrumbs'][] = ['label' => 'Mots de passe', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mdp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mettre à jour', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Supprimer', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Etes vous sur de vouloir supprimer ce mot de passe ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'mot_de_passe',
            'description',
            'date_execution',
            'adresse_site',
        ],
    ]) ?>

</div>
