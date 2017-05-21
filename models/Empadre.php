<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empadre".
 *
 * @property integer $idempadre
 * @property string $empadre
 */
class Empadre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empadre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empadre'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idempadre' => 'Idempadre',
            'empadre' => 'Empadre',
        ];
    }
}
