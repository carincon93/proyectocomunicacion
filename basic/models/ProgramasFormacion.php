<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programasformacion".
 *
 * @property integer $id
 * @property string $nombrePrograma
 * @property integer $id_programaFormacion
 * @property string $tipoFormacion
 */
class ProgramasFormacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programasformacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombrePrograma', 'id_programaFormacion', 'tipoFormacion'], 'required'],
            [['id_programaFormacion'], 'integer'],
            [['nombrePrograma'], 'string', 'max' => 128],
            [['tipoFormacion'], 'string', 'max' => 64],
            [['id_programaFormacion'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombrePrograma' => 'Nombre Programa',
            'id_programaFormacion' => 'Id Programa Formacion',
            'tipoFormacion' => 'Tipo Formacion',
        ];
    }
}
