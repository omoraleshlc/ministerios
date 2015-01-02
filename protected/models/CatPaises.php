<?php

/**
 * This is the model class for table "cat_paises".
 *
 * The followings are the available columns in table 'cat_paises':
 * @property string $num
 * @property string $name
 * @property string $alpha2
 * @property string $alpha3
 * @property double $latitude
 * @property double $longitude
 */
class CatPaises extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cat_paises';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num, name, alpha2, alpha3, latitude, longitude', 'required'),
			array('latitude, longitude', 'numerical'),
			array('num, alpha3', 'length', 'max'=>3),
			array('name', 'length', 'max'=>150),
			array('alpha2', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('num, name, alpha2, alpha3, latitude, longitude', 'safe', 'on'=>'search'),
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
			'num' => 'Num',
			'name' => 'Name',
			'alpha2' => 'Alpha2',
			'alpha3' => 'Alpha3',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
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

		$criteria->compare('num',$this->num,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('alpha2',$this->alpha2,true);
		$criteria->compare('alpha3',$this->alpha3,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatPaises the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
            public static function getListaPaises()
            {
            return CHtml::listData(CatPaises::model()->findAll(),'num','nombre');
            }



}
