<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tenders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenders-form">
    
     
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-12"> 
            <div class="col-lg-1"> 
                <?= $form->field($model, 'icetrade_number')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'registration_number')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'purchase_type')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-2"> 
                <?php echo $form->field($model, 'date_publication')->widget('trntv\yii\datetime\DateTimeWidget'); ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'start_price_in_byn')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'payment_in_byn')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-2"> 
                <?php echo $form->field($model, 'deadline_for_proposals')->widget('trntv\yii\datetime\DateTimeWidget'); ?>
            </div>
            <div class="col-lg-2"> 
                <?php echo $form->field($model, 'date_and_time_of_trades')->widget('trntv\yii\datetime\DateTimeWidget'); ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'condition_on_the_current_day')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-1"> 
                <?= $form->field($model, 'lots')->textInput() ?>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-lg-4"> 
                <?= $form->field($model, 'product')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'product_subject')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'customer')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'financing')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-2"> 
                <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>
            </div>
        </div>
    </div>
 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
