<?php

/**
 * This is the model class for table "analysis".
 *
 * The followings are the available columns in table 'analysis':
 * @property integer $idAnalysis
 * @property integer $CustomerID
 * @property integer $UserID
 * @property string $Comments
 *
 * The followings are the available model relations:
 * @property Analysisstatus $analysisstatus
 * @property Survey[] $surveys
 */
class Analysis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'analysis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CustomerID, UserID', 'required'),
			array('CustomerID, UserID', 'numerical', 'integerOnly'=>true),
			array('Comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAnalysis, CustomerID, UserID, Comments', 'safe', 'on'=>'search'),
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
			'analysisstatus' => array(self::HAS_ONE, 'Analysisstatus', 'ID'),
			'surveys' => array(self::HAS_MANY, 'Survey', 'idAnalysis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAnalysis' => 'Id Analysis',
			'CustomerID' => 'Customer',
			'UserID' => 'User',
			'Comments' => 'Comments',
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

		$criteria->compare('idAnalysis',$this->idAnalysis);
		$criteria->compare('CustomerID',$this->CustomerID);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('Comments',$this->Comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Analysis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
