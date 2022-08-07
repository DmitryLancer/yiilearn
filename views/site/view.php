
<h2>Детальная информация:</h2>

<?php

use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes'=> [
        'id',
        'city',
        'age',
        'population',
        'square',
    ],
]);