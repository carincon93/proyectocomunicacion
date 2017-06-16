<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipios".
 *
 * @property integer $id_municipio
 * @property integer $id_departamento
 * @property string $nombre
 *
 * @property Departamentos $idDepartamento
 * @property Pqrsform[] $pqrsforms
 */
class Municipios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_departamento', 'nombre'], 'required'],
            [['id_departamento'], 'integer'],
            [['nombre'], 'string'],
            [['id_departamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['id_departamento' => 'id_departamento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_municipio' => 'Id Municipio',
            'id_departamento' => 'Id Departamento',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartamento()
    {
        return $this->hasOne(Departamentos::className(), ['id_departamento' => 'id_departamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPqrsforms()
    {
        return $this->hasMany(Pqrsform::className(), ['id_municipio' => 'id_municipio']);
    }
}
