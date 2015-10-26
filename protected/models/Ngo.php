<?php

/**
 * This is the model class for table "ngo".
 *
 * The followings are the available columns in table 'ngo':
 * @property integer $Ngo_id
 * @property string $Ngo_name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $address
 * @property string $upload_doc
 * @property string $picture
 *
 * The followings are the available model relations:
 * @property UserRateReviewNgo[] $userRateReviewNgos
 */
class Ngo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ngo the static model class
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
		return 'ngo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Ngo_id, Ngo_name, username, password, email, address, upload_doc, picture', 'required'),
			array('Ngo_id', 'numerical', 'integerOnly'=>true),
			array('Ngo_name, username, password, email, address, upload_doc, picture', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Ngo_id, Ngo_name, username, password, email, address, upload_doc, picture', 'safe', 'on'=>'search'),
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
			'userRateReviewNgos' => array(self::HAS_MANY, 'UserRateReviewNgo', 'Ngo_Ngo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Ngo_id' => 'Ngo',
			'Ngo_name' => 'Ngo Name',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'address' => 'Address',
			'upload_doc' => 'Upload Doc',
			'picture' => 'Picture',
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

		$criteria->compare('Ngo_id',$this->Ngo_id);
		$criteria->compare('Ngo_name',$this->Ngo_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('upload_doc',$this->upload_doc,true);
		$criteria->compare('picture',$this->picture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}