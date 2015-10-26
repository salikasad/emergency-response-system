<?php

/**
 * This is the model class for table "story".
 *
 * The followings are the available columns in table 'story':
 * @property integer $story_id
 * @property string $title
 * @property string $story
 *
 * The followings are the available model relations:
 * @property UserWriteStory[] $userWriteStories
 */
class Story extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Story the static model class
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
		return 'story';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, story', 'required'),
			array('title', 'length', 'max'=>100),
			array('story', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('story_id, title, story', 'safe', 'on'=>'search'),
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
			'userWriteStories' => array(self::HAS_MANY, 'UserWriteStory', 'story_story_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'story_id' => 'Story',
			'title' => 'Title',
			'story' => 'Story',
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

		$criteria->compare('story_id',$this->story_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('story',$this->story,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}