<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $idCustomer
 * @property string $Company
 * @property string $ContactLast
 * @property string $ContactFirst
 * @property string $EMail
 * @property integer $Phone
 * @property string $ContactTitle
 * @property string $BusinessAddress
 * @property integer $StatusID
 */
class Customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Phone, StatusID', 'numerical', 'integerOnly'=>true),
			array('EMail', 'length', 'max'=>45),
			array('Company, ContactLast, ContactFirst, ContactTitle, BusinessAddress', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCustomer, Company, ContactLast, ContactFirst, EMail, Phone, ContactTitle, BusinessAddress, StatusID', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCustomer' => 'Id Customer',
			'Company' => 'Company',
			'ContactLast' => 'Contact Last',
			'ContactFirst' => 'Contact First',
			'EMail' => 'Email',
			'Phone' => 'Phone',
			'ContactTitle' => 'Contact Title',
			'BusinessAddress' => 'Business Address',
			'StatusID' => 'Status',
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

		$criteria->compare('idCustomer',$this->idCustomer);
		$criteria->compare('Company',$this->Company,true);
		$criteria->compare('ContactLast',$this->ContactLast,true);
		$criteria->compare('ContactFirst',$this->ContactFirst,true);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('Phone',$this->Phone);
		$criteria->compare('ContactTitle',$this->ContactTitle,true);
		$criteria->compare('BusinessAddress',$this->BusinessAddress,true);
		$criteria->compare('StatusID',$this->StatusID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
