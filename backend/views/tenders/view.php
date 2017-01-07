<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tenders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product:ntext',
            'icetrade_number',
            'registration_number',
            'product_subject:ntext',
            'purchase_type',
            'date_publication',
            'start_price_in_byn',
            'customer:ntext',
            'financing:ntext',
            'payment_in_byn',
            'deadline_for_proposals',
            'date_and_time_of_trades',
            'condition_on_the_current_day',
            'comment:ntext',
            'lots',
        ],
    ]) ?>
</div>
