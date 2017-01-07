<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TendersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product') ?>

    <?= $form->field($model, 'icetrade_number') ?>

    <?= $form->field($model, 'registration_number') ?>

    <?= $form->field($model, 'product_subject') ?>

<?php // echo $form->field($model, 'purchase_type') ?>

<?php // echo $form->field($model, 'date_publication') ?>

<?php // echo $form->field($model, 'start_price_in_byn') ?>

<?php // echo $form->field($model, 'customer') ?>

<?php // echo $form->field($model, 'financing') ?>

<?php // echo $form->field($model, 'payment_in_byn') ?>

<?php // echo $form->field($model, 'deadline_for_proposals') ?>

<?php // echo $form->field($model, 'date_and_time_of_trades') ?>

<?php // echo $form->field($model, 'condition_on_the_current_day') ?>

<?php // echo $form->field($model, 'comment') ?>

<?php // echo $form->field($model, 'lots') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
