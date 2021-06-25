<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MdpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mdp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mot_de_passe') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'adresse_site') ?>

    <div class="form-group">
        <?= Html::submitButton('Rechercher', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
