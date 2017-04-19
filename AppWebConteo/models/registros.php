<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registros".
 *
 * @property string $fecha
 * @property string $hora
 * @property integer $num_pasajeros
 * @property string $dia
 * @property string $mes
 * @property integer $id
 */
class registros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'num_pasajeros', 'dia', 'mes', 'id'], 'required'],
            [['num_pasajeros', 'id'], 'integer'],
            [['fecha', 'hora', 'dia', 'mes'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'num_pasajeros' => 'Num Pasajeros',
            'dia' => 'Dia',
            'mes' => 'Mes',
            'id' => 'ID',
        ];
    }
}
