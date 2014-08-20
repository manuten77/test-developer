<?php

/**
 * This is the model class for table "hotels".
 *
 * The followings are the available columns in table 'hotels':
 * @property integer $H_Id
 * @property string $H_Name
 * @property string $H_Address
 * @property string $H_Town
 * @property string $H_Country
 * @property string $H_PostalCode
 * @property string $H_Phone
 * @property string $H_Email
 * @property integer $H_Number_Rooms
 * @property string $H_Services
 * @property integer $H_Star_Level
 */
class Hotels extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hotels';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('H_Id, H_Name, H_Address, H_Town, H_Country, H_PostalCode, H_Phone, H_Email, H_Number_Rooms, H_Services, H_Star_Level', 'required'),
			array('H_Id, H_Number_Rooms, H_Star_Level', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('H_Id, H_Name, H_Address, H_Town, H_Country, H_PostalCode, H_Phone, H_Email, H_Number_Rooms, H_Services, H_Star_Level', 'safe', 'on'=>'search'),
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
			'H_Id' => 'H',
			'H_Name' => 'H Name',
			'H_Address' => 'H Address',
			'H_Town' => 'H Town',
			'H_Country' => 'H Country',
			'H_PostalCode' => 'H Postal Code',
			'H_Phone' => 'H Phone',
			'H_Email' => 'H Email',
			'H_Number_Rooms' => 'H Number Rooms',
			'H_Services' => 'H Services',
			'H_Star_Level' => 'H Star Level',
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

		$criteria->compare('H_Id',$this->H_Id);
		$criteria->compare('H_Name',$this->H_Name,true);
		$criteria->compare('H_Address',$this->H_Address,true);
		$criteria->compare('H_Town',$this->H_Town,true);
		$criteria->compare('H_Country',$this->H_Country,true);
		$criteria->compare('H_PostalCode',$this->H_PostalCode,true);
		$criteria->compare('H_Phone',$this->H_Phone,true);
		$criteria->compare('H_Email',$this->H_Email,true);
		$criteria->compare('H_Number_Rooms',$this->H_Number_Rooms);
		$criteria->compare('H_Services',$this->H_Services,true);
		$criteria->compare('H_Star_Level',$this->H_Star_Level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hotels the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
