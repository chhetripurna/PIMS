<?php

/**
 * This is the model class for table "Pims.Login".
 *
 * The followings are the available columns in table 'Pims.Login':
 * @property string $loginName
 * @property string $password
 * @property string $userType
 *
 * The followings are the available model relations:
 * @property Doctor[] $doctors
 * @property MedicalStaff[] $medicalStaff
 * @property OfficeStaff[] $officeStaff
 * @property Volunteer[] $volunteers
 */
class Login extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pims.Login';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('loginName, password, userType', 'required'),
			array('loginName', 'length', 'max'=>7),
			array('password', 'length', 'max'=>128),
			array('userType', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('loginName, password, userType', 'safe', 'on'=>'search'),
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
			'doctors' => array(self::HAS_MANY, 'Doctor', 'loginName'),
			'medicalStaff' => array(self::HAS_MANY, 'MedicalStaff', 'loginName'),
			'officeStaff' => array(self::HAS_MANY, 'OfficeStaff', 'loginName'),
			'volunteers' => array(self::HAS_MANY, 'Volunteer', 'loginName'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'loginName' => 'Login Name',
			'password' => 'Password',
			'userType' => 'User Type',
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

		$criteria->compare('loginName',$this->loginName,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('userType',$this->userType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Login the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
