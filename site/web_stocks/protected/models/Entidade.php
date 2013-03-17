<?php

/**
 * This is the model class for table "entidade".
 *
 * The followings are the available columns in table 'entidade':
 * @property integer $identidade
 * @property string $codigo
 * @property string $nome
 * @property string $morada
 * @property string $localidade
 * @property string $codpostal
 * @property string $telefone
 * @property string $telemovel
 * @property string $email
 * @property string $site
 * @property string $tipoentidade
 *
 * The followings are the available model relations:
 * @property Movimento[] $movimentos
 * @property Obra[] $obras
 * @property Produto[] $produtos
 */
class Entidade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entidade the static model class
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
		return 'entidade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, nome', 'required'),
                        array('codigo', 'unique', 'message' => UserModule::t("Este código já existe para outra entidade.")),
			array('codigo, codpostal', 'length', 'max'=>45),
			array('nome, morada, localidade, site', 'length', 'max'=>150),
			array('telefone, telemovel', 'length', 'max'=>20),
			array('email', 'length', 'max'=>100),
			array('tipoentidade', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('identidade, codigo, nome, morada, localidade, codpostal, telefone, telemovel, email, site, tipoentidade', 'safe', 'on'=>'search'),
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
			'movimentos' => array(self::HAS_MANY, 'Movimento', 'fornecedorid'),
			'obras' => array(self::HAS_MANY, 'Obra', 'clienteid'),
			'produtos' => array(self::HAS_MANY, 'Produto', 'fornecedorid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'identidade' => 'Identidade',
			'codigo' => 'Codigo',
			'nome' => 'Nome',
			'morada' => 'Morada',
			'localidade' => 'Localidade',
			'codpostal' => 'Codpostal',
			'telefone' => 'Telefone',
			'telemovel' => 'Telemovel',
			'email' => 'Email',
			'site' => 'Site',
			'tipoentidade' => 'Tipoentidade',
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

		$criteria->compare('identidade',$this->identidade);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('morada',$this->morada,true);
		$criteria->compare('localidade',$this->localidade,true);
		$criteria->compare('codpostal',$this->codpostal,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('telemovel',$this->telemovel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('tipoentidade',$this->tipoentidade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}