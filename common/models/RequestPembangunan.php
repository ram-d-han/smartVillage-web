<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request_pembangunan".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property int $user_id
 * @property int $kategori_pembangunan_id
 * @property string $status
 * @property string|null $created_at
 * @property string $updated_at
 *
 * @property User $user
 * @property KategoriPembangunan $kategoriPembangunan
 */
class RequestPembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request_pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'user_id', 'kategori_pembangunan_id', 'status'], 'required'],
            [['deskripsi', 'status'], 'string'],
            [['user_id', 'kategori_pembangunan_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
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
            'deskripsi' => 'Deskripsi',
            'user_id' => 'User ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[KategoriPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPembangunan()
    {
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }
}
