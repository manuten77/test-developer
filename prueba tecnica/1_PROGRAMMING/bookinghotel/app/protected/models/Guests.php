<?php

/**
 * This is the model class for table "guests".
 *
 * The followings are the available columns in table 'guests':
 * @property integer $G_Id
 * @property string $G_Title
 * @property string $G_Name
 * @property string $G_Surname
 * @property string $G_DateofBirthday
 * @property string $G_Address
 * @property string $G_Town
 * @property string $G_Country
 * @property string $G_PostalCode
 * @property string $G_ContactPhone
 */
class Guests extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'guests';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('G_Id, G_Title, G_Name, G_Surname, G_DateofBirthday, G_Address, G_Town, G_Country, G_PostalCode, G_ContactPhone', 'required'),
			array('G_Id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('G_Id, G_Title, G_Name, G_Surname, G_DateofBirthday, G_Address, G_Town, G_Country, G_PostalCode, G_ContactPhone', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'G_Id' => 'G',
			'G_Title' => 'G Title',
			'G_Name' => 'G Name',
			'G_Surname' => 'G Surname',
			'G_DateofBirthday' => 'G Dateof Birthday',
			'G_Address' => 'G Address',
			'G_Town' => 'G Town',
			'G_Country' => 'G Country',
			'G_PostalCode' => 'G Postal Code',
			'G_ContactPhone' => 'G Contact Phone',
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

		$criteria->compare('G_Id',$this->G_Id);
		$criteria->compare('G_Title',$this->G_Title,true);
		$criteria->compare('G_Name',$this->G_Name,true);
		$criteria->compare('G_Surname',$this->G_Surname,true);
		$criteria->compare('G_DateofBirthday',$this->G_DateofBirthday,true);
		$criteria->compare('G_Address',$this->G_Address,true);
		$criteria->compare('G_Town',$this->G_Town,true);
		$criteria->compare('G_Country',$this->G_Country,true);
		$criteria->compare('G_PostalCode',$this->G_PostalCode,true);
		$criteria->compare('G_ContactPhone',$this->G_ContactPhone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Guests the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
