<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mitra".
 *
 * @property int $id
 * @property string $nama_mitra
 * @property string $alamat
 * @property string $no_telp
 * @property string $email
 * @property int $user_id
 *
 * @property User $user
 * @property Pembangunan[] $pembangunans
 */
class Mitra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mitra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_mitra', 'alamat', 'no_telp', 'email', 'user_id'], 'required'],
            [['alamat'], 'string'],
            [['user_id'], 'integer'],
            [['nama_mitra', 'email'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_mitra' => 'Nama Mitra',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'user_id' => 'User ID',
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
     * Gets query for [[Pembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans()
    {
        return $this->hasMany(Pembangunan::className(), ['mitra_id' => 'id']);
    }
}
