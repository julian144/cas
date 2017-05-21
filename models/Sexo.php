<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sexo".
 *
 * @property integer $idsexo
 * @property string $sexo
 *
 * @property Sexo1[] $sexo1s
 * @property Registro[] $idregistros
 */
class Sexo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sexo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idsexo'], 'required'],
            [['idsexo'], 'integer'],
            [['sexo'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsexo' => 'Idsexo',
            'sexo' => 'Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSexo1s()
    {
        return $this->hasMany(Sexo1::className(), ['idsexo' => 'idsexo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdregistros()
    {
        return $this->hasMany(Registro::className(), ['idregistro' => 'idregistro'])->viaTable('sexo_1', ['idsexo' => 'idsexo']);
    }
}
