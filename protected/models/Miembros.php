<?php

/**
 * This is the model class for table "miembros".
 *
 * The followings are the available columns in table 'miembros':
 * @property integer $KeyM
 * @property string $nombre
 * @property string $grupo
 * @property string $fechaNacimiento
 * @property string $fechaBautismo
 * @property string $telefonoCasa
 * @property string $telefonoPrivado
 * @property string $direccion
 * @property string $iglesia
 * @property string $status
 * @property string $cargo1
 * @property string $cargo2
 * @property string $cargo3
 * @property string $club1
 * @property string $club2
 * @property string $club3
 * @property string $fecha
 */
class Miembros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'miembros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, grupo, fechaNacimiento, fechaBautismo, telefonoCasa, telefonoPrivado, direccion, iglesia, cargo1, cargo2, cargo3, club1, club2, club3, fecha', 'required'),
			array('nombre, direccion', 'length', 'max'=>200),
			array('grupo, cargo1, cargo2, cargo3, club1, club2, club3', 'length', 'max'=>50),
			array('fechaNacimiento, fechaBautismo', 'length', 'max'=>10),
			array('telefonoCasa, telefonoPrivado, iglesia', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KeyM, nombre, grupo, fechaNacimiento, fechaBautismo, telefonoCasa, telefonoPrivado, direccion, iglesia, status, cargo1, cargo2, cargo3, club1, club2, club3, fecha', 'safe', 'on'=>'search'),
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
			'KeyM' => 'Key M',
			'nombre' => 'Nombre',
			'grupo' => 'Grupo',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'fechaBautismo' => 'Fecha Bautismo',
			'telefonoCasa' => 'Telefono Casa',
			'telefonoPrivado' => 'Telefono Privado',
			'direccion' => 'Direccion',
			'iglesia' => 'Iglesia',
			'status' => 'Status',
			'cargo1' => 'Cargo1',
			'cargo2' => 'Cargo2',
			'cargo3' => 'Cargo3',
			'club1' => 'Club1',
			'club2' => 'Club2',
			'club3' => 'Club3',
			'fecha' => 'Fecha',
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

		$criteria->compare('KeyM',$this->KeyM);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('grupo',$this->grupo,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('fechaBautismo',$this->fechaBautismo,true);
		$criteria->compare('telefonoCasa',$this->telefonoCasa,true);
		$criteria->compare('telefonoPrivado',$this->telefonoPrivado,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('iglesia',$this->iglesia,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('cargo1',$this->cargo1,true);
		$criteria->compare('cargo2',$this->cargo2,true);
		$criteria->compare('cargo3',$this->cargo3,true);
		$criteria->compare('club1',$this->club1,true);
		$criteria->compare('club2',$this->club2,true);
		$criteria->compare('club3',$this->club3,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Miembros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
