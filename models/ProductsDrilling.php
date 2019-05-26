<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class ProductsDrilling extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public static function tableName()
    {
        return 'products_drilling';
    }
}