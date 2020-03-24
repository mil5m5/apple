<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\Url;

/**
 * This is the model class for table "apples".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $created_at
 * @property int|null $date_drop
 * @property int|null $status
 * @property int|null $percentage_eaten
 */
class Apple extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apples';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'date_drop', 'status', 'percentage_eaten'], 'integer'],
            [['image'], 'string', 'max' => 255],
            ['status', 'default', 'value' => 0],
            ['percentage_eaten', 'default', 'value' => 100],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'date_drop',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'created_at' => 'Created At',
            'date_drop' => 'Date Drop',
            'status' => 'Status',
            'percentage_eaten' => 'Percentage Eaten',
        ];
    }
}
