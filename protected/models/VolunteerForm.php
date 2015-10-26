<?php

/**
 * This is the model class for table "volunteer_form".
 *
 * The followings are the available columns in table 'volunteer_form':
 * @property integer $id
 * @property string $team_name
 * @property string $name_of_ngo
 * @property string $email
 * @property string $address
 * @property integer $no_of_members
 * @property string $experience
 * @property integer $User_user_id
 *
 * The followings are the available model relations:
 * @property User $userUser
 */
class VolunteerForm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VolunteerForm the static model class
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
		return 'volunteer_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_name, name_of_ngo, email, address, no_of_members, experience, User_user_id', 'required'),
			array('no_of_members, User_user_id', 'numerical', 'integerOnly'=>true),
			array('team_name, name_of_ngo, email', 'length', 'max'=>45),
			array('address, experience', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team_name, name_of_ngo, email, address, no_of_members, experience, User_user_id', 'safe', 'on'=>'search'),
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
			'userUser' => array(self::BELONGS_TO, 'User', 'User_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'team_name' => 'Team Name',
			'name_of_ngo' => 'Name Of Ngo',
			'email' => 'Email',
			'address' => 'Address',
			'no_of_members' => 'No Of Members',
			'experience' => 'Experience',
			'User_user_id' => 'User User',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('team_name',$this->team_name,true);
		$criteria->compare('name_of_ngo',$this->name_of_ngo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('no_of_members',$this->no_of_members);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('User_user_id',$this->User_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}