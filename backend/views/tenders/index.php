<?php

use yii\helpers\Html;
use yii\grid\GridView;
use fedemotta\datatables\DataTables;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TendersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ТЕNDERS';
//$this->params['breadcrumbs'][] = $this->title;

//$searchModel = new ModelSearch();
//$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>
<div class="tenders-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Html::encode($this->title) ?>
            <div class="tools pull-right">
                <?= Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn']) ?>
            </div>
        </div>

        <div class="panel-body"></div>

        <div class="tendersTable table-scrollable">
            <?= DataTables::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,

          
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //['class' => 'yii\grid\SerialColumn'],

                    //'id',
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

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>