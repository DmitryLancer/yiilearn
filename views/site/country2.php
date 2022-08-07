<?php

use yii\grid\GridView;
use yii\helpers\Html;

echo Html::a("Добавить город", ["add"], ['class' => 'btn btn-info']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'city',
        'age',
        'population',
        'square',
        ['class'=>'yii\grid\ActionColumn']
    ]
]);

