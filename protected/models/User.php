<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $session
 * @property string $token
 * @property integer $user_type_id
 *
 * The followings are the available model relations:
 * @property Invoice[] $invoices
 * @property PlanUser[] $planUsers
 * @property Company $company
 * @property Messenger $messenger
 * @property Person $person
 * @property UserType $userType
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, user_type_id', 'required'),
			array('user_type_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>100),
			array('password, token', 'length', 'max'=>250),
			array('session', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, session, token, user_type_id', 'safe', 'on'=>'search'),
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
			'userType' => array(self::BELONGS_TO, 'UserType', 'user_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'session' => 'Session',
			'token' => 'Token',
			'user_type_id' => 'User Type',
		);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)===$this->password;
	}
	
	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}
	
	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	public function generateSalt()
	{
		return uniqid('',true);
	}
	
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('session',$this->session,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('user_type_id',$this->user_type_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}