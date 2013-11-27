<?php

/**
 * This is the model class for table "Pims.Doctor".
 *
 * The followings are the available columns in table 'Pims.Doctor':
 * @property string $doctorID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $suffix
 * @property string $specialization
 * @property string $loginName
 *
 * The followings are the available model relations:
 * @property DocNotes[] $docNotes
 * @property Login $loginName0
 * @property Prescription[] $prescriptions
 * @property Procedures[] $procedures
 */
class Doctor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Doctor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('doctorID, firstName, lastName', 'required'),
			array('doctorID, loginName', 'length', 'max'=>7),
			array('firstName, middleName, lastName', 'length', 'max'=>32),
			array('suffix', 'length', 'max'=>16),
			array('specialization', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('doctorID, firstName, middleName, lastName, suffix, specialization, loginName', 'safe', 'on'=>'search'),
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
			'docNotes' => array(self::HAS_MANY, 'DocNotes', 'doctorID'),
			'loginName0' => array(self::BELONGS_TO, 'Login', 'loginName'),
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'doctorID'),
			'procedures' => array(self::HAS_MANY, 'Procedures', 'doctorID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'doctorID' => 'Doctor',
			'firstName' => 'First Name',
			'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
			'suffix' => 'Suffix',
			'specialization' => 'Specialization',
			'loginName' => 'Login Name',
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

		$criteria->compare('doctorID',$this->doctorID,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('suffix',$this->suffix,true);
		$criteria->compare('specialization',$this->specialization,true);
		$criteria->compare('loginName',$this->loginName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Doctor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
