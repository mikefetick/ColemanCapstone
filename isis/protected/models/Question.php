<?php

/**
 * This is the model class for table "question".
 *
 * The followings are the available columns in table 'question':
 * @property integer $idQuestion
 * @property string $Question
 * @property string $OptA
 * @property string $OptB
 * @property string $OptC
 * @property string $OptD
 * @property integer $CategoryID
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Survey $idQuestion0
 */
class Question extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CategoryID', 'numerical', 'integerOnly'=>true),
			array('Question, OptA, OptB, OptC, OptD', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idQuestion, Question, OptA, OptB, OptC, OptD, CategoryID', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'CategoryID'),
			'idQuestion0' => array(self::BELONGS_TO, 'Survey', 'idQuestion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idQuestion' => 'Id Question',
			'Question' => 'Question',
			'OptA' => 'Opt A',
			'OptB' => 'Opt B',
			'OptC' => 'Opt C',
			'OptD' => 'Opt D',
			'CategoryID' => 'Category',
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

		$criteria->compare('idQuestion',$this->idQuestion);
		$criteria->compare('Question',$this->Question,true);
		$criteria->compare('OptA',$this->OptA,true);
		$criteria->compare('OptB',$this->OptB,true);
		$criteria->compare('OptC',$this->OptC,true);
		$criteria->compare('OptD',$this->OptD,true);
		$criteria->compare('CategoryID',$this->CategoryID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Question the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
