<?php

/**
 * This is the model class for table "Pims.Patient".
 *
 * The followings are the available columns in table 'Pims.Patient':
 * @property string $patientID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $suffix
 * @property string $DOB
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zipCode
 * @property string $homePhone
 * @property string $workPhone
 * @property string $cellPhone
 * @property string $contact1Name
 * @property string $contact1Num
 * @property string $contact2Name
 * @property string $contact2Num
 * @property string $familyDoctor
 *
 * The followings are the available model relations:
 * @property Billing[] $billings
 * @property DocNotes[] $docNotes
 * @property Insurance[] $insurances
 * @property MedicNotes[] $medicNotes
 * @property Prescription[] $prescriptions
 * @property Procedures[] $procedures
 * @property Visit[] $visits
 */
class Patient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientID, firstName, lastName, DOB, street, city, zipCode, contact1Name, contact1Num, contact2Name, contact2Num', 'required'),
			array('patientID', 'length', 'max'=>8),
			array('firstName, middleName, lastName', 'length', 'max'=>32),
			array('suffix', 'length', 'max'=>16),
			array('street, city', 'length', 'max'=>64),
			array('state', 'length', 'max'=>2),
			array('zipCode', 'length', 'max'=>5),
			array('homePhone, cellPhone', 'length', 'max'=>10),
			array('workPhone, contact1Num, contact2Num', 'length', 'max'=>14),
			array('contact1Name, contact2Name, familyDoctor', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('patientID, firstName, middleName, lastName, DOB, city, state, zipCode, homePhone, workPhone, cellPhone, familyDoctor', 'safe', 'on'=>'search'),
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
			'billings' => array(self::HAS_MANY, 'Billing', 'patientID'),
			'docNotes' => array(self::HAS_MANY, 'DocNotes', 'patientID'),
			'insurances' => array(self::HAS_MANY, 'Insurance', 'patientID'),
			'medicNotes' => array(self::HAS_MANY, 'MedicNotes', 'patientID'),
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'patientID'),
			'procedures' => array(self::HAS_MANY, 'Procedures', 'patientID'),
			'visits' => array(self::HAS_MANY, 'Visit', 'patientID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'patientID' => 'PatientID',
			'firstName' => 'First Name',
			'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
			'suffix' => 'Suffix',
			'DOB' => 'Date of Birth',
			'street' => 'Street',
			'city' => 'City',
			'state' => 'State',
			'zipCode' => 'Zip Code',
			'homePhone' => 'Home Phone',
			'workPhone' => 'Work Phone',
			'cellPhone' => 'Cell Phone',
			'contact1Name' => 'First Contact Name',
			'contact1Num' => 'First Contact Num',
			'contact2Name' => 'Second Contact Name',
			'contact2Num' => 'Second Contact Num',
			'familyDoctor' => 'Family Doctor',
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

		//$criteria->compare('patientID',$this->patientID,true);
		$criteria->compare('firstName',$this->firstName,true);
		//$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipCode',$this->zipCode,true);
		$criteria->compare('homePhone',$this->homePhone,true);
		$criteria->compare('workPhone',$this->workPhone,true);
		$criteria->compare('cellPhone',$this->cellPhone,true);
		$criteria->compare('familyDoctor',$this->familyDoctor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
