<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'city'=>'Название города',
            'age'=>'Год основания',
            'population'=>'Население',
            'square'=>'Площадь',
        ];
    }
}

?>
