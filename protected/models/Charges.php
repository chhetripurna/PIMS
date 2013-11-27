<?php

/**
 * This is the model class for table "Pims.Charges".
 *
 * The followings are the available columns in table 'Pims.Charges':
 * @property string $chargeID
 * @property string $billingID
 * @property string $item
 * @property string $amount
 *
 * The followings are the available model relations:
 * @property Billing $billing
 */
class Charges extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Charges';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('billingID, item, amount', 'required'),
			array('billingID', 'length', 'max'=>20),
			array('item', 'length', 'max'=>64),
			array('amount', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('chargeID, billingID, item, amount', 'safe', 'on'=>'search'),
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
			'billing' => array(self::BELONGS_TO, 'Billing', 'billingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'chargeID' => 'Charge',
			'billingID' => 'Billing',
			'item' => 'Item',
			'amount' => 'Amount',
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

		$criteria->compare('chargeID',$this->chargeID,true);
		$criteria->compare('billingID',$this->billingID,true);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('amount',$this->amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Charges the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
