<?php

/**
 * This is the model class for table "user_join_event".
 *
 * The followings are the available columns in table 'user_join_event':
 * @property integer $id
 * @property integer $User_user_id
 * @property integer $event_event_id
 *
 * The followings are the available model relations:
 * @property Event $eventEvent
 * @property User $userUser
 */
class UserJoinEvent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserJoinEvent the static model class
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
		return 'user_join_event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User_user_id, event_event_id', 'required'),
			array('User_user_id, event_event_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, User_user_id, event_event_id', 'safe', 'on'=>'search'),
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
			'eventEvent' => array(self::BELONGS_TO, 'Event', 'event_event_id'),
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
			'User_user_id' => 'User User',
			'event_event_id' => 'Event Event',
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
		$criteria->compare('User_user_id',$this->User_user_id);
		$criteria->compare('event_event_id',$this->event_event_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}