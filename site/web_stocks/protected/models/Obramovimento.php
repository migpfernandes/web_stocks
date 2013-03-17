<?php

/**
 * This is the model class for table "obramovimento".
 *
 * The followings are the available columns in table 'obramovimento':
 * @property integer $idobramovimento
 * @property integer $obraid
 * @property integer $produtoid
 * @property string $descricao
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Obra $obra
 * @property Produto $produto
 */
class Obramovimento extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Obramovimento the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'obramovimento';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('obraid, produtoid, data', 'required'),
            array('obraid, produtoid', 'numerical', 'integerOnly' => true),
            array('descricao', 'length', 'max' => 3000),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idobramovimento, obraid, produtoid, descricao, data', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'obra' => array(self::BELONGS_TO, 'Obra', 'obraid'),
            'produto' => array(self::BELONGS_TO, 'Produto', 'produtoid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idobramovimento' => 'ID',
            'obraid' => 'Obra',
            'produtoid' => 'Produto',
            'descricao' => 'Descrição',
            'data' => 'Data',
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

        $criteria->compare('idobramovimento', $this->idobramovimento);
        $criteria->compare('obraid', $this->obraid);
        $criteria->compare('produtoid', $this->produtoid);
        $criteria->compare('descricao', $this->descricao, true);
        $criteria->compare('data', $this->data, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function LinhaToArray() {
        return array($this->idobramovimento, $this->descricao, $this->produto->nome, $this->data);
    }

}