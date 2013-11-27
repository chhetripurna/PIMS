<?php

/**
 * This is the model class for table "Pims.Billing".
 *
 * The followings are the available columns in table 'Pims.Billing':
 * @property string $billingID
 * @property string $patientID
 * @property string $visitID
 * @property string $amountPaid
 * @property string $amountPaidByInsurance
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * @property Visit $visit
 * @property Charges[] $charges
 */
class Billing extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Billing';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientID', 'length', 'max'=>8),
			array('visitID', 'length', 'max'=>16),
			array('amountPaid, amountPaidByInsurance', 'length', 'max'=>9),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('billingID, patientID, visitID', 'safe', 'on'=>'search'),
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
			'patient' => array(self::BELONGS_TO, 'Patient', 'patientID'),
			'visit' => array(self::BELONGS_TO, 'Visit', 'visitID'),
			'charges' => array(self::HAS_MANY, 'Charges', 'billingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'billingID' => 'BillingID',
			'patientID' => 'PatientID',
			'visitID' => 'VisitID',
			'amountPaid' => 'Amount Paid',
			'amountPaidByInsurance' => 'Amount Paid By Insurance',
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

		$criteria->compare('billingID',$this->billingID,true);
		$criteria->compare('patientID',$this->patientID,true);
		$criteria->compare('visitID',$this->visitID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Billing the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
