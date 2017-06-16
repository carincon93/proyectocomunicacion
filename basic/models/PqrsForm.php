<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pqrsform".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $email
 * @property string $tipoDocumento
 * @property string $numeroDocumento
 * @property integer $teleNumero
 * @property string $celNumero
 * @property integer $id_departamento
 * @property integer $id_municipio
 * @property string $direccion
 * @property string $tipoPeticion
 * @property string $autorizacion
 * @property string $mensaje
 *
 * @property Departamentos $idDepartamento
 * @property Municipios $idMunicipio
 */
class PqrsForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pqrsform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'email', 'tipoDocumento', 'numeroDocumento', 'teleNumero', 'celNumero', 'id_departamento', 'id_municipio', 'direccion', 'tipoPeticion', 'autorizacion', 'mensaje'], 'required'],
            [['numeroDocumento', 'teleNumero', 'celNumero', 'id_departamento', 'id_municipio'], 'integer'],
            [['nombre', 'email', 'direccion'], 'string', 'max' => 64],
            [['tipoDocumento', 'tipoPeticion', 'autorizacion'], 'string', 'max' => 32],
            [['mensaje'], 'string', 'max' => 255],
            [['id_departamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['id_departamento' => 'id_departamento']],
            [['id_municipio'], 'exist', 'skipOnError' => true, 'targetClass' => Municipios::className(), 'targetAttribute' => ['id_municipio' => 'id_municipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'email' => 'Email',
            'tipoDocumento' => 'Tipo Documento',
            'numeroDocumento' => 'Numero Documento',
            'teleNumero' => 'Tele Numero',
            'celNumero' => 'Cel Numero',
            'id_departamento' => 'Id Departamento',
            'id_municipio' => 'Id Municipio',
            'direccion' => 'Direccion',
            'tipoPeticion' => 'Tipo Peticion',
            'autorizacion' => 'Autorizacion',
            'mensaje' => 'Mensaje',
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
    public function getIdMunicipio()
    {
        return $this->hasOne(Municipios::className(), ['id_municipio' => 'id_municipio']);
    }
}
