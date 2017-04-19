<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pruba".
 *
 * @property string $fecha
 * @property string $hora
 * @property string $num_pasajeros
 * @property string $dia
 * @property string $mes
 * @property integer $id
 */
class Pruba extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pruba';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'num_pasajeros', 'dia', 'mes', 'id'], 'required'],
            [['id'], 'integer'],
            [['fecha', 'hora', 'num_pasajeros', 'dia', 'mes'], 'string', 'max' => 100],
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
