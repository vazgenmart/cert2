<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Organizations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            [
                'attribute' => 'sds',
                'value' => function ($data) {
                  return  implode(",", $data->sds);
                }
            ],
            'accreditation_certificate',
            'cert_created_date',
            //'cert_end_date',
            //'description:ntext',
            //'is_valid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
