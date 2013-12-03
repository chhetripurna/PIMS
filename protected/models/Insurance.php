<?php

/**
 * This is the model class for table "Pims.Insurance".
 *
 * The followings are the available columns in table 'Pims.Insurance':
 * @property string $insuranceID
 * @property string $patientID
 * @property string $provider
 * @property string $accountNum
 * @property string $groupNum
 *
 * The followings are the available model relations:
 * @property Patient $patient
 */
class Insurance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Insurance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientID, provider, accountNum, groupNum', 'required'),
			array('patientID, groupNum', 'length', 'max'=>8),
			array('provider', 'length', 'max'=>128),
			array('accountNum', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('patientID, provider, accountNum, groupNum', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'insuranceID' => 'InsuranceID',
			'patientID' => 'PatientID',
			'provider' => 'Provider',
			'accountNum' => 'Account Number',
			'groupNum' => 'Group Number',
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

		$criteria->compare('patientID',$this->patientID,true);
		$criteria->compare('provider',$this->provider,true);
		$criteria->compare('accountNum',$this->accountNum,true);
		$criteria->compare('groupNum',$this->groupNum,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Insurance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
