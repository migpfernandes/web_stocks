<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property integer $idproduto
 * @property integer $fornecedorid
 * @property string $doccompra
 * @property string $nome
 * @property string $descricao
 * @property string $unidade
 * @property string $quantidade
 * @property string $precoUnit
 * @property string $precototal
 *
 * The followings are the available model relations:
 * @property Movimento[] $movimentos
 * @property Obramovimento[] $obramovimentos
 * @property Entidade $fornecedor
 */
class Produto extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Produto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'produto';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fornecedorid, nome, quantidade, precoUnit, precototal', 'required'),
            array('fornecedorid', 'numerical', 'integerOnly' => true),
            array('doccompra, nome, unidade', 'length', 'max' => 45),
            array('descricao', 'length', 'max' => 3000),
            array('quantidade, precoUnit, precototal', 'length', 'max' => 14),
            array('quantidade, precoUnit, precototal', 'numerical'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idproduto, fornecedorid, doccompra, nome, descricao, unidade, quantidade, precoUnit, precototal', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'movimentos' => array(self::HAS_MANY, 'Movimento', 'produtoid'),
            'obramovimentos' => array(self::HAS_MANY, 'Obramovimento', 'produtoid'),
            'fornecedor' => array(self::BELONGS_TO, 'Entidade', 'fornecedorid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idproduto' => 'ID',
            'fornecedorid' => 'Fornecedor',
            'doccompra' => 'Documento de compra',
            'nome' => 'Nome',
            'descricao' => 'Descrição',
            'unidade' => 'Unidade',
            'quantidade' => 'Quantidade',
            'precoUnit' => 'Preço Unitário',
            'precototal' => 'Preço Total',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idproduto', $this->idproduto);
        $criteria->compare('fornecedorid', $this->fornecedorid);
        $criteria->compare('doccompra', $this->doccompra, true);
        $criteria->compare('nome', $this->nome, true);
        $criteria->compare('descricao', $this->descricao, true);
        $criteria->compare('unidade', $this->unidade, true);
        $criteria->compare('quantidade', $this->quantidade, true);
        $criteria->compare('precoUnit', $this->precoUnit, true);
        $criteria->compare('precototal', $this->precototal, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}