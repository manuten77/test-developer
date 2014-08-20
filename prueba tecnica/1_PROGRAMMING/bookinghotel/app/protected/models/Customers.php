<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $C_Id
 * @property string $C_Title
 * @property string $C_Name
 * @property string $C_Surname
 * @property string $C_DateofBirthday
 * @property string $C_Address
 * @property string $C_Town
 * @property string $C_Country
 * @property string $C_PostalCode
 * @property string $C_HomePhone
 * @property string $C_MobilePhone
 * @property string $C_Email
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('C_Id, C_Title, C_Name, C_Surname, C_DateofBirthday, C_Address, C_Town, C_Country, C_PostalCode, C_HomePhone, C_MobilePhone, C_Email', 'required'),
			array('C_Id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('C_Id, C_Title, C_Name, C_Surname, C_DateofBirthday, C_Address, C_Town, C_Country, C_PostalCode, C_HomePhone, C_MobilePhone, C_Email', 'safe', 'on'=>'search'),
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
			'C_Id' => 'C',
			'C_Title' => 'C Title',
			'C_Name' => 'C Name',
			'C_Surname' => 'C Surname',
			'C_DateofBirthday' => 'C Dateof Birthday',
			'C_Address' => 'C Address',
			'C_Town' => 'C Town',
			'C_Country' => 'C Country',
			'C_PostalCode' => 'C Postal Code',
			'C_HomePhone' => 'C Home Phone',
			'C_MobilePhone' => 'C Mobile Phone',
			'C_Email' => 'C Email',
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

		$criteria->compare('C_Id',$this->C_Id);
		$criteria->compare('C_Title',$this->C_Title,true);
		$criteria->compare('C_Name',$this->C_Name,true);
		$criteria->compare('C_Surname',$this->C_Surname,true);
		$criteria->compare('C_DateofBirthday',$this->C_DateofBirthday,true);
		$criteria->compare('C_Address',$this->C_Address,true);
		$criteria->compare('C_Town',$this->C_Town,true);
		$criteria->compare('C_Country',$this->C_Country,true);
		$criteria->compare('C_PostalCode',$this->C_PostalCode,true);
		$criteria->compare('C_HomePhone',$this->C_HomePhone,true);
		$criteria->compare('C_MobilePhone',$this->C_MobilePhone,true);
		$criteria->compare('C_Email',$this->C_Email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
