<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $gender
 * @property string $activekey
 * @property string $create_at
 * @property string $lastvisit_at
 * @property integer $superuser
 * @property integer $status
 * @property string $salt
 * @property integer $requires_new_password
 * @property integer $login_attempts
 * @property integer $login_time
 * @property string $login_ip
 * @property string $activation_key
 * @property string $validation_key
 * @property string $create_time
 * @property string $update_time
 * @property string $reset_token
 * @property string $profilepic
 * @property string $address
 *
 * The followings are the available model relations:
 * @property UserJoinEvent[] $userJoinEvents
 * @property UserRateReviewNgo[] $userRateReviewNgos
 * @property UserUploadVideo[] $userUploadVideos
 * @property UserWriteStory[] $userWriteStories
 * @property VolunteerForm[] $volunteerForms
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
			array('superuser, status, requires_new_password, login_attempts, login_time', 'numerical', 'integerOnly'=>true),
			array('username, login_ip, address', 'length', 'max'=>45),
			array('password, email, activekey, activation_key', 'length', 'max'=>120),
			array('gender', 'length', 'max'=>1),
			array('salt, validation_key', 'length', 'max'=>255),
			array('reset_token', 'length', 'max'=>250),
			array('profilepic', 'length', 'max'=>450),
			array('create_at, lastvisit_at, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, username, password, email, gender, activekey, create_at, lastvisit_at, superuser, status, salt, requires_new_password, login_attempts, login_time, login_ip, activation_key, validation_key, create_time, update_time, reset_token, profilepic, address', 'safe', 'on'=>'search'),
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
			'userJoinEvents' => array(self::HAS_MANY, 'UserJoinEvent', 'User_user_id'),
			'userRateReviewNgos' => array(self::HAS_MANY, 'UserRateReviewNgo', 'User_user_id'),
			'userUploadVideos' => array(self::HAS_MANY, 'UserUploadVideo', 'User_user_id'),
			'userWriteStories' => array(self::HAS_MANY, 'UserWriteStory', 'User_user_id'),
			'volunteerForms' => array(self::HAS_MANY, 'VolunteerForm', 'User_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'gender' => 'Gender',
			'activekey' => 'Activekey',
			'create_at' => 'Create At',
			'lastvisit_at' => 'Lastvisit At',
			'superuser' => 'Superuser',
			'status' => 'Status',
			'salt' => 'Salt',
			'requires_new_password' => 'Requires New Password',
			'login_attempts' => 'Login Attempts',
			'login_time' => 'Login Time',
			'login_ip' => 'Login Ip',
			'activation_key' => 'Activation Key',
			'validation_key' => 'Validation Key',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'reset_token' => 'Reset Token',
			'profilepic' => 'Profilepic',
			'address' => 'Address',
		);
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('activekey',$this->activekey,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('requires_new_password',$this->requires_new_password);
		$criteria->compare('login_attempts',$this->login_attempts);
		$criteria->compare('login_time',$this->login_time);
		$criteria->compare('login_ip',$this->login_ip,true);
		$criteria->compare('activation_key',$this->activation_key,true);
		$criteria->compare('validation_key',$this->validation_key,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('reset_token',$this->reset_token,true);
		$criteria->compare('profilepic',$this->profilepic,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}