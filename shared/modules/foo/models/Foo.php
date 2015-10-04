<?php

namespace foo\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "foo".
 *
 * @property integer $id
 * @property string  $one
 * @property string  $two
 * @property string  $three
 */
class Foo extends ActiveRecord
{
    public static function tableName()
    {
        return 'foo';
    }

    public function rules()
    {
        return [
            [ [ 'one', 'two', 'three' ], 'string', 'max' => 255 ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'one' => 'One',
            'two' => 'Two',
            'three' => 'Three',
        ];
    }
}