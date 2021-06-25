<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mdp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mdp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mot_de_passe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_execution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adresse_site')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Enregistrer', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
