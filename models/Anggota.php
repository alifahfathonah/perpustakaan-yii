<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id
 * @property string $nama
 * @property string $nomor_anggota
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nomor_anggota', 'alamat', 'telepon', 'email'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'nomor_anggota', 'telepon', 'email'], 'string', 'max' => 255],
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
            'nomor_anggota' => 'Nomor Anggota',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
        ];
    }
}
