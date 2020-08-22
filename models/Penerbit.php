<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerbit".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $telepon
 * @property string|null $email
 * @property string|null $alamat
 */
class Penerbit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerbit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'telepon', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }
}
