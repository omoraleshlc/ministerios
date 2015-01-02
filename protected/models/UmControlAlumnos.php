<?php

/**
 * This is the model class for table "um_controlAlumnos".
 *
 * The followings are the available columns in table 'um_controlAlumnos':
 * @property string $keyA
 * @property integer $Gen
 * @property string $vive
 * @property integer $matricula
 * @property string $apellidos1
 * @property string $apellidos2
 * @property string $nombre1
 * @property string $nombre2
 * @property string $Hermanos
 * @property string $fechaNacimiento
 * @property string $lugarNacimiento
 * @property string $pais
 * @property string $Nacionalidad
 * @property string $region
 * @property string $Estadocivil
 * @property string $Conyuge
 * @property string $ConyugeExaUM
 * @property string $NombreFacebook
 * @property string $URLFacebook
 * @property string $Puesto
 * @property string $viveEn
 * @property string $Ciudad
 * @property string $Postgrado
 * @property string $Especialidad
 * @property string $Subespecialidad
 * @property string $Maestria
 * @property string $Residencia
 * @property string $Twitter
 * @property string $email1
 * @property string $email2
 * @property string $telCasa
 * @property string $telTrabajo
 * @property string $telCelular
 * @property string $ciudadResidencia
 * @property string $direccion
 * @property string $Trabajo
 * @property string $Trabajo2
 */
class UmControlAlumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'um_controlAlumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Gen, matricula', 'numerical', 'integerOnly'=>true),
			array('keyA, fechaNacimiento, Estadocivil, Twitter', 'length', 'max'=>10),
			array('vive, ConyugeExaUM, Puesto', 'length', 'max'=>2),
			array('apellidos1, viveEn', 'length', 'max'=>24),
			array('apellidos2', 'length', 'max'=>12),
			array('nombre1', 'length', 'max'=>13),
			array('nombre2', 'length', 'max'=>19),
			array('Hermanos, Postgrado', 'length', 'max'=>1),
			array('lugarNacimiento, Residencia', 'length', 'max'=>26),
			array('pais, Ciudad', 'length', 'max'=>21),
			array('Nacionalidad, region', 'length', 'max'=>14),
			array('Conyuge, Maestria', 'length', 'max'=>20),
			array('NombreFacebook', 'length', 'max'=>27),
			array('URLFacebook', 'length', 'max'=>59),
			array('Especialidad, email2', 'length', 'max'=>37),
			array('Subespecialidad', 'length', 'max'=>28),
			array('email1', 'length', 'max'=>38),
			array('telCasa, telTrabajo', 'length', 'max'=>17),
			array('telCelular', 'length', 'max'=>18),
			array('ciudadResidencia', 'length', 'max'=>36),
			array('direccion', 'length', 'max'=>66),
			array('Trabajo', 'length', 'max'=>48),
			array('Trabajo2', 'length', 'max'=>42),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('keyA, Gen, vive, matricula, apellidos1, apellidos2, nombre1, nombre2, Hermanos, fechaNacimiento, lugarNacimiento, pais, Nacionalidad, region, Estadocivil, Conyuge, ConyugeExaUM, NombreFacebook, URLFacebook, Puesto, viveEn, Ciudad, Postgrado, Especialidad, Subespecialidad, Maestria, Residencia, Twitter, email1, email2, telCasa, telTrabajo, telCelular, ciudadResidencia, direccion, Trabajo, Trabajo2', 'safe', 'on'=>'search'),
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
			
			'Gen' => 'Gen',
			'vive' => 'Vive',
			'matricula' => 'Matricula',
			'apellidos1' => 'Apellidos1',
			'apellidos2' => 'Apellidos2',
			'nombre1' => 'Nombre1',
			'nombre2' => 'Nombre2',
			'Hermanos' => 'Hermanos',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'lugarNacimiento' => 'Lugar Nacimiento',
			'pais' => 'Pais',
			'Nacionalidad' => 'Nacionalidad',
			'region' => 'Region',
			'Estadocivil' => 'Estadocivil',
			'Conyuge' => 'Conyuge',
			'ConyugeExaUM' => 'Conyuge Exa Um',
			'NombreFacebook' => 'Nombre Facebook',
			'URLFacebook' => 'Urlfacebook',
			'Puesto' => 'Puesto',
			'viveEn' => 'Vive En',
			'Ciudad' => 'Ciudad',
			'Postgrado' => 'Postgrado',
			'Especialidad' => 'Especialidad',
			'Subespecialidad' => 'Subespecialidad',
			'Maestria' => 'Maestria',
			'Residencia' => 'Residencia',
			'Twitter' => 'Twitter',
			'email1' => 'Email1',
			'email2' => 'Email2',
			'telCasa' => 'Tel Casa',
			'telTrabajo' => 'Tel Trabajo',
			'telCelular' => 'Tel Celular',
			'ciudadResidencia' => 'Ciudad Residencia',
			'direccion' => 'Direccion',
			'Trabajo' => 'Trabajo',
			'Trabajo2' => 'Trabajo2',
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

		//$criteria->compare('keyA',$this->keyA,true);
                $criteria->compare('matricula',$this->matricula,true);
		//$criteria->compare('Gen',$this->Gen);
		//$criteria->compare('vive',$this->vive,true);
		
		$criteria->compare('apellidos1',$this->apellidos1,true);
		$criteria->compare('apellidos2',$this->apellidos2,true);
		$criteria->compare('nombre1',$this->nombre1,true);
		$criteria->compare('nombre2',$this->nombre2,true);
		$criteria->compare('Hermanos',$this->Hermanos,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('lugarNacimiento',$this->lugarNacimiento,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('Estadocivil',$this->Estadocivil,true);
		$criteria->compare('Conyuge',$this->Conyuge,true);
		$criteria->compare('ConyugeExaUM',$this->ConyugeExaUM,true);
		$criteria->compare('NombreFacebook',$this->NombreFacebook,true);
		$criteria->compare('URLFacebook',$this->URLFacebook,true);
		$criteria->compare('Puesto',$this->Puesto,true);
		$criteria->compare('viveEn',$this->viveEn,true);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('Postgrado',$this->Postgrado,true);
		$criteria->compare('Especialidad',$this->Especialidad,true);
		$criteria->compare('Subespecialidad',$this->Subespecialidad,true);
		$criteria->compare('Maestria',$this->Maestria,true);
		$criteria->compare('Residencia',$this->Residencia,true);
		$criteria->compare('Twitter',$this->Twitter,true);
		$criteria->compare('email1',$this->email1,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('telCasa',$this->telCasa,true);
		$criteria->compare('telTrabajo',$this->telTrabajo,true);
		$criteria->compare('telCelular',$this->telCelular,true);
		$criteria->compare('ciudadResidencia',$this->ciudadResidencia,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('Trabajo',$this->Trabajo,true);
		$criteria->compare('Trabajo2',$this->Trabajo2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UmControlAlumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
