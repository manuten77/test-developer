<?php

/**
 * This is the model class for table "payments".
 *
 * The followings are the available columns in table 'payments':
 * @property integer $P_Id
 * @property integer $B_Id
 * @property integer $C_Id
 * @property integer $P_Method_Id
 * @property double $P_Amount
 * @property string $P_Comments
 */
class Payments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P_Id, B_Id, C_Id, P_Method_Id, P_Amount, P_Comments', 'required'),
			array('P_Id, B_Id, C_Id, P_Method_Id', 'numerical', 'integerOnly'=>true),
			array('P_Amount', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('P_Id, B_Id, C_Id, P_Method_Id, P_Amount, P_Comments', 'safe', 'on'=>'search'),
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
			'P_Id' => 'P',
			'B_Id' => 'B',
			'C_Id' => 'C',
			'P_Method_Id' => 'P Method',
			'P_Amount' => 'P Amount',
			'P_Comments' => 'P Comments',
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

		$criteria->compare('P_Id',$this->P_Id);
		$criteria->compare('B_Id',$this->B_Id);
		$criteria->compare('C_Id',$this->C_Id);
		$criteria->compare('P_Method_Id',$this->P_Method_Id);
		$criteria->compare('P_Amount',$this->P_Amount);
		$criteria->compare('P_Comments',$this->P_Comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Payments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
