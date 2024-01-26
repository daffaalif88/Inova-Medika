<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $id_transaksi
 * @property integer $id_pegawai
 * @property integer $id_tindakan
 * @property integer $id_user
 * @property integer $id_wilayah
 * @property integer $id_obat
 *
 * The followings are the available model relations:
 * @property Obat $idObat
 * @property Pegawai $idPegawai
 * @property Tindakan $idTindakan
 * @property User $idUser
 * @property Wilayah $idWilayah
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, id_tindakan, id_user, id_wilayah, id_obat', 'required'),
			array('id_pegawai, id_tindakan, id_user, id_wilayah, id_obat', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi, id_pegawai, id_tindakan, id_user, id_wilayah, id_obat', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idObat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
			'idPegawai' => array(self::BELONGS_TO, 'Pegawai', 'id_pegawai'),
			'idTindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idWilayah' => array(self::BELONGS_TO, 'Wilayah', 'id_wilayah'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi' => 'Id Transaksi',
			'id_pegawai' => 'Id Pegawai',
			'id_tindakan' => 'Id Tindakan',
			'id_user' => 'Id User',
			'id_wilayah' => 'Id Wilayah',
			'id_obat' => 'Id Obat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_wilayah',$this->id_wilayah);
		$criteria->compare('id_obat',$this->id_obat);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
