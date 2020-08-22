<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $judul
 * @property int $id_kategori
 * @property int $id_penulis
 * @property int $id_penerbit
 * @property string $sinopsis
 * @property string $tahun_terbit
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'id_kategori', 'id_penulis', 'id_penerbit', 'sinopsis', 'tahun_terbit'], 'required'],
            [['id_kategori', 'id_penulis', 'id_penerbit'], 'integer'],
            [['sinopsis'], 'string'],
            [['judul', 'tahun_terbit'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'id_kategori' => 'Id Kategori',
            'id_penulis' => 'Id Penulis',
            'id_penerbit' => 'Id Penerbit',
            'sinopsis' => 'Sinopsis',
            'tahun_terbit' => 'Tahun Terbit',
        ];
    }
}
