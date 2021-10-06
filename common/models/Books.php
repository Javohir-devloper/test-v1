<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $genre
 * @property int $count_1
 * @property int $status
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'genre', 'count_1'], 'required'],
            [['count_1'], 'integer', 'max' => 999, 'min' => 1],
            [['status'], 'integer'],
            [['name', 'author', 'genre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'author' => 'Автор',
            'genre' => 'Жанр',
            'count_1' => 'Количество страниц',
            'status' => 'Статус',
        ];
    }
}

