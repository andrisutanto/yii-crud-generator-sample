<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $id_member
 * @property string|null $nama_lengkap
 * @property string|null $no_handphone
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap'], 'string', 'max' => 50],
            [['no_handphone'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_member' => 'Id Member',
            'nama_lengkap' => 'Nama Lengkap',
            'no_handphone' => 'No Handphone',
        ];
    }
}
