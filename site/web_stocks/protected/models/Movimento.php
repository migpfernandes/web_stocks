<?php

/**
 * This is the model class for table "movimento".
 *
 * The followings are the available columns in table 'movimento':
 * @property integer $idmovimento
 * @property integer $fornecedorid
 * @property string $doccompra
 * @property integer $produtoid
 * @property integer $quantidade
 * @property string $precounit
 * @property string $precototal
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Entidade $fornecedor
 * @property Produto $produto
 */
class Movimento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movimento the static model class
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
		return 'movimento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fornecedorid, produtoid, quantidade, data', 'required'),
			array('fornecedorid, produtoid, quantidade', 'numerical', 'integerOnly'=>true),
			array('doccompra', 'length', 'max'=>45),
			array('precounit, precototal', 'length', 'max'=>14),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idmovimento, fornecedorid, doccompra, produtoid, quantidade, precounit, precototal, data', 'safe', 'on'=>'search'),
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
			'fornecedor' => array(self::BELONGS_TO, 'Entidade', 'fornecedorid'),
			'produto' => array(self::BELONGS_TO, 'Produto', 'produtoid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmovimento' => 'Idmovimento',
			'fornecedorid' => 'Fornecedorid',
			'doccompra' => 'Doccompra',
			'produtoid' => 'Produtoid',
			'quantidade' => 'Quantidade',
			'precounit' => 'Precounit',
			'precototal' => 'Precototal',
			'data' => 'Data',
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

		$criteria->compare('idmovimento',$this->idmovimento);
		$criteria->compare('fornecedorid',$this->fornecedorid);
		$criteria->compare('doccompra',$this->doccompra,true);
		$criteria->compare('produtoid',$this->produtoid);
		$criteria->compare('quantidade',$this->quantidade);
		$criteria->compare('precounit',$this->precounit,true);
		$criteria->compare('precototal',$this->precototal,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}