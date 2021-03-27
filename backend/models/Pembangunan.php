<?php

namespace backend\models;

use Yii;
use yii\helpers\url;

/**
 * This is the model class for table "pembangunan".
 *
 * @property int $id
 * @property string $nama_pembangunan
 * @property string $foto
 * @property float $anggaran
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $longitude
 * @property string $latitude
 * @property string $keterangan
 * @property float $prosentase
 * @property int $sumber_dana_pembangunan_id
 * @property int $kategori_pembangunan_id
 * @property int $status_pembangunan_id
 * @property int $user_id
 * @property int $mitra_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LaporAduan[] $laporAduans
 * @property LaporProgress[] $laporProgresses
 * @property Mitra $mitra
 * @property User $user
 * @property StatusPembangunan $statusPembangunan
 * @property KategoriPembangunan $kategoriPembangunan
 * @property User $user0
 * @property KategoriPembangunan $kategoriPembangunan0
 * @property User $user1
 * @property KategoriPembangunan $kategoriPembangunan1
 * @property KategoriPembangunan $kategoriPembangunan2
 * @property SumberDanaPembangunan $sumberDanaPembangunan
 */
class Pembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pembangunan', 'foto', 'anggaran', 'tgl_mulai', 'tgl_selesai', 'longitude', 'latitude', 'keterangan', 'prosentase', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'user_id', 'mitra_id'], 'required'],
            [['anggaran', 'prosentase'], 'number'],
            [['tgl_mulai', 'tgl_selesai', 'created_at', 'updated_at'], 'safe'],
            [['sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'user_id', 'mitra_id'], 'integer'],
            [['nama_pembangunan'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 255],
            [['foto'], 'file', 'extensions' => 'jpg, png'],
            [['longitude', 'latitude'], 'string', 'max' => 100],
            [['mitra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mitra::className(), 'targetAttribute' => ['mitra_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPembangunan::className(), 'targetAttribute' => ['status_pembangunan_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['sumber_dana_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => SumberDanaPembangunan::className(), 'targetAttribute' => ['sumber_dana_pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pembangunan' => 'Nama Pembangunan',
            'foto' => 'Foto',
            'anggaran' => 'Anggaran',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'keterangan' => 'Keterangan',
            'prosentase' => 'Prosentase',
            'sumber_dana_pembangunan_id' => 'Sumber Dana Pembangunan ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status_pembangunan_id' => 'Status Pembangunan ID',
            'user_id' => 'User ID',
            'mitra_id' => 'Mitra ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[LaporAduans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporAduans()
    {
        return $this->hasMany(LaporAduan::className(), ['pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[LaporProgresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporProgresses()
    {
        return $this->hasMany(LaporProgress::className(), ['pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Mitra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMitra()
    {
        return $this->hasOne(Mitra::className(), ['id' => 'mitra_id']);
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
     * Gets query for [[StatusPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPembangunan()
    {
        return $this->hasOne(StatusPembangunan::className(), ['id' => 'status_pembangunan_id']);
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

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[KategoriPembangunan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPembangunan0()
    {
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }

    /**
     * Gets query for [[User1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser1()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[KategoriPembangunan1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPembangunan1()
    {
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }

    /**
     * Gets query for [[KategoriPembangunan2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPembangunan2()
    {
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }

    /**
     * Gets query for [[SumberDanaPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSumberDanaPembangunan()
    {
        return $this->hasOne(SumberDanaPembangunan::className(), ['id' => 'sumber_dana_pembangunan_id']);
    }

    public function getImageUrl()
    {
        return yii::getAlias('@Uploads2').'/'.$this->foto;
    }
}
