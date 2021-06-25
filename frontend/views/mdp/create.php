<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mdp */

$this->title = 'Ajouter un mot de passe';
$this->params['breadcrumbs'][] = ['label' => 'Mots de passe', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mdp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
