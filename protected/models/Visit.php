<?php

/**
 * This is the model class for table "Pims.Visit".
 *
 * The followings are the available columns in table 'Pims.Visit':
 * @property string $visitID
 * @property string $patientID
 * @property string $admitDate
 * @property string $dischargeDate
 * @property string $admitReason
 * @property string $facility
 * @property integer $floor
 * @property integer $roomNum
 * @property integer $bedNum
 * @property string $visitors
 *
 * The followings are the available model relations:
 * @property Billing[] $billings
 * @property DocNotes[] $docNotes
 * @property MedicNotes[] $medicNotes
 * @property Prescription[] $prescriptions
 * @property Procedures[] $procedures
 * @property Patient $patient
 */
class Visit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Visit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('visitID, patientID, admitDate, admitReason, facility, floor, roomNum', 'required'),
			array('floor, roomNum, bedNum', 'numerical', 'integerOnly'=>true),
			array('visitID', 'length', 'max'=>16),
			array('patientID', 'length', 'max'=>8),
			array('admitReason, visitors', 'length', 'max'=>512),
			array('facility', 'length', 'max'=>32),
			array('dischargeDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('visitID, patientID, admitDate, dischargeDate, admitReason, facility, floor, roomNum, bedNum, visitors', 'safe', 'on'=>'search'),
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
			'billings' => array(self::HAS_MANY, 'Billing', 'visitID'),
			'docNotes' => array(self::HAS_MANY, 'DocNotes', 'visitID'),
			'medicNotes' => array(self::HAS_MANY, 'MedicNotes', 'visitID'),
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'visitID'),
			'procedures' => array(self::HAS_MANY, 'Procedures', 'visitID'),
			'patient' => array(self::BELONGS_TO, 'Patient', 'patientID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'visitID' => 'Visit',
			'patientID' => 'Patient',
			'admitDate' => 'Admit Date',
			'dischargeDate' => 'Discharge Date',
			'admitReason' => 'Admit Reason',
			'facility' => 'Facility',
			'floor' => 'Floor',
			'roomNum' => 'Room Num',
			'bedNum' => 'Bed Num',
			'visitors' => 'Visitors',
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

		$criteria->compare('visitID',$this->visitID,true);
		$criteria->compare('patientID',$this->patientID,true);
		$criteria->compare('admitDate',$this->admitDate,true);
		$criteria->compare('dischargeDate',$this->dischargeDate,true);
		$criteria->compare('admitReason',$this->admitReason,true);
		$criteria->compare('facility',$this->facility,true);
		$criteria->compare('floor',$this->floor);
		$criteria->compare('roomNum',$this->roomNum);
		$criteria->compare('bedNum',$this->bedNum);
		$criteria->compare('visitors',$this->visitors,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
