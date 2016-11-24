<?php

namespace app\models;

use Yii;
use app\models\Author;

/**
 * This is the model class for table "{{%books}}".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $author_id
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%books}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['author_id'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 1024],
            [['author_id'], 'exist', 'targetClass'=>'\app\models\Author', 'targetAttribute'=>'id', 'message'=>Yii::t('app', 'Такого автора нет')]
          
        ];


    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'author_id' => Yii::t('app', 'Author'),
        ];
    }

    public function getAuthor(){
        return $this->hasOne(Author::className(), ['id'=> 'author_id'] );
    }
   
    
}
