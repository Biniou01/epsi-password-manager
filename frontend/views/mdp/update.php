<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mdp */

$this->title = 'Mettre à jour votre fiche pour '.$model->adresse_site;
$this->params['breadcrumbs'][] = ['label' => 'Mots de passe', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adresse_site, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="mdp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
