<?php

/**
 * This is the model class for table "obra".
 *
 * The followings are the available columns in table 'obra':
 * @property integer $idobra
 * @property string $codigo
 * @property string $descricao
 * @property string $datainicio
 * @property string $datafim
 * @property integer $clienteid
 *
 * The followings are the available model relations:
 * @property Entidade $cliente
 * @property Obramovimento[] $obramovimentos
 */
class Obra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Obra the static model class
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
		return 'obra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, clienteid', 'required'),
			array('clienteid', 'numerical', 'integerOnly'=>true),
			array('codigo', 'length', 'max'=>45),
			array('descricao', 'length', 'max'=>4000),
			array('datainicio, datafim', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idobra, codigo, descricao, datainicio, datafim, clienteid', 'safe', 'on'=>'search'),
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
			'cliente' => array(self::BELONGS_TO, 'Entidade', 'clienteid'),
			'obramovimentos' => array(self::HAS_MANY, 'Obramovimento', 'obraid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idobra' => 'Idobra',
			'codigo' => 'Codigo',
			'descricao' => 'Descricao',
			'datainicio' => 'Datainicio',
			'datafim' => 'Datafim',
			'clienteid' => 'Clienteid',
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

		$criteria->compare('idobra',$this->idobra);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('datainicio',$this->datainicio,true);
		$criteria->compare('datafim',$this->datafim,true);
		$criteria->compare('clienteid',$this->clienteid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}