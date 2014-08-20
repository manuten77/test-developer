<?php

/**
 * This is the model class for table "bookings".
 *
 * The followings are the available columns in table 'bookings':
 * @property integer $B_Id
 * @property string $B_DateMade
 * @property string $B_TimeMade
 * @property string $B_StartDate
 * @property string $B_EndDate
 * @property string $Tot_Pay_Due_Date
 * @property double $Tot_Pay_Due_Amount
 * @property string $Tot_Pay_Made_On
 * @property string $B_Notes_Comments
 * @property integer $H_Id
 */
class Bookings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bookings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('B_Id, B_DateMade, B_TimeMade, B_StartDate, B_EndDate, Tot_Pay_Due_Date, Tot_Pay_Due_Amount, Tot_Pay_Made_On, B_Notes_Comments, H_Id', 'required'),
			array('B_Id, H_Id', 'numerical', 'integerOnly'=>true),
			array('Tot_Pay_Due_Amount', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('B_Id, B_DateMade, B_TimeMade, B_StartDate, B_EndDate, Tot_Pay_Due_Date, Tot_Pay_Due_Amount, Tot_Pay_Made_On, B_Notes_Comments, H_Id', 'safe', 'on'=>'search'),
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
			'B_Id' => 'B',
			'B_DateMade' => 'B Date Made',
			'B_TimeMade' => 'B Time Made',
			'B_StartDate' => 'B Start Date',
			'B_EndDate' => 'B End Date',
			'Tot_Pay_Due_Date' => 'Tot Pay Due Date',
			'Tot_Pay_Due_Amount' => 'Tot Pay Due Amount',
			'Tot_Pay_Made_On' => 'Tot Pay Made On',
			'B_Notes_Comments' => 'B Notes Comments',
			'H_Id' => 'H',
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

		$criteria->compare('B_Id',$this->B_Id);
		$criteria->compare('B_DateMade',$this->B_DateMade,true);
		$criteria->compare('B_TimeMade',$this->B_TimeMade,true);
		$criteria->compare('B_StartDate',$this->B_StartDate,true);
		$criteria->compare('B_EndDate',$this->B_EndDate,true);
		$criteria->compare('Tot_Pay_Due_Date',$this->Tot_Pay_Due_Date,true);
		$criteria->compare('Tot_Pay_Due_Amount',$this->Tot_Pay_Due_Amount);
		$criteria->compare('Tot_Pay_Made_On',$this->Tot_Pay_Made_On,true);
		$criteria->compare('B_Notes_Comments',$this->B_Notes_Comments,true);
		$criteria->compare('H_Id',$this->H_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bookings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
