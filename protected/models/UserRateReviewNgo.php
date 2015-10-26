<?php

/**
 * This is the model class for table "user_rate_review_ngo".
 *
 * The followings are the available columns in table 'user_rate_review_ngo':
 * @property integer $id
 * @property integer $rate
 * @property string $review
 * @property integer $User_user_id
 * @property integer $Ngo_Ngo_id
 *
 * The followings are the available model relations:
 * @property Ngo $ngoNgo
 * @property User $userUser
 */
class UserRateReviewNgo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserRateReviewNgo the static model class
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
		return 'user_rate_review_ngo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rate, review, User_user_id, Ngo_Ngo_id', 'required'),
			array('rate, User_user_id, Ngo_Ngo_id', 'numerical', 'integerOnly'=>true),
			array('review', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rate, review, User_user_id, Ngo_Ngo_id', 'safe', 'on'=>'search'),
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
			'ngoNgo' => array(self::BELONGS_TO, 'Ngo', 'Ngo_Ngo_id'),
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
			'rate' => 'Rate',
			'review' => 'Review',
			'User_user_id' => 'User User',
			'Ngo_Ngo_id' => 'Ngo Ngo',
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
		$criteria->compare('rate',$this->rate);
		$criteria->compare('review',$this->review,true);
		$criteria->compare('User_user_id',$this->User_user_id);
		$criteria->compare('Ngo_Ngo_id',$this->Ngo_Ngo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}