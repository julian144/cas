<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registro".
 *
 * @property integer $idregistro
 * @property string $nosiniiga
 * @property integer $noarete
 * @property string $aretecampania
 * @property string $fechacoloc
 * @property string $fechanac
 * @property string $edad
 * @property string $sexo
 * @property integer $raza
 * @property string $especraza
 *@property string $estado
 * @property string $empadre
 * @property integer $madre
 */
class Registroanimal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'registro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechacoloc','noarete','edad','sexo','especraza','raza','empadre','madre','fechanac','estado'], 'required'],
            [['noarete', 'madre'], 'integer'],
            [['fechacoloc', 'fechanac'], 'safe'],

            [['noarete','madre'], 'integer', 'min' =>1, 'max' => 9999999999],
            [['edad'], 'string','min' => 2, 'max' => 25],
            [['raza'], 'string','min' => 2, 'max' => 20],
            [['sexo', 'empadre','estado'], 'string', 'min' =>2, 'max' => 40],
            [['especraza'], 'string', 'min'=>2, 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          'idregistro' => 'Idregistro',
          'noarete' => 'Número de Arete',
          'fechacoloc' => 'Fecha de Colocación',
          'fechanac' => 'Fecha de Nacimiento',
          'madre' => 'Madre',
          'sexo' => 'Sexo',
          'raza' => 'Raza',
          'especraza' => 'Raza especifica',
          'empadre' => 'Empadre',
          'estado'=>'Estado del animal',

        ];
    }
}
