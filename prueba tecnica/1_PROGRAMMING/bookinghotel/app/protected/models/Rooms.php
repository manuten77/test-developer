<?php

/**
 * This is the model class for table "rooms".
 *
 * The followings are the available columns in table 'rooms':
 * @property integer $R_Id
 * @property integer $R_Type_Id
 * @property integer $R_Band_Id
 * @property integer $R_Price_Id
 * @property integer $R_Floor
 * @property string $R_AdditionalNotes
 * @property integer $H_Id
 */
class Rooms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rooms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('R_Id, R_Type_Id, R_Band_Id, R_Price_Id, R_Floor, R_AdditionalNotes, H_Id', 'required'),
			array('R_Id, R_Type_Id, R_Band_Id, R_Price_Id, R_Floor, H_Id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('R_Id, R_Type_Id, R_Band_Id, R_Price_Id, R_Floor, R_AdditionalNotes, H_Id', 'safe', 'on'=>'search'),
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
			'R_Id' => 'R',
			'R_Type_Id' => 'R Type',
			'R_Band_Id' => 'R Band',
			'R_Price_Id' => 'R Price',
			'R_Floor' => 'R Floor',
			'R_AdditionalNotes' => 'R Additional Notes',
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

		$criteria->compare('R_Id',$this->R_Id);
		$criteria->compare('R_Type_Id',$this->R_Type_Id);
		$criteria->compare('R_Band_Id',$this->R_Band_Id);
		$criteria->compare('R_Price_Id',$this->R_Price_Id);
		$criteria->compare('R_Floor',$this->R_Floor);
		$criteria->compare('R_AdditionalNotes',$this->R_AdditionalNotes,true);
		$criteria->compare('H_Id',$this->H_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rooms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
