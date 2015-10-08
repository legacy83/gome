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
 * @property integer $four
 * @property string  $five
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
            [ [ 'one', 'two', 'three' ], 'required' ],
            [ [ 'four' ], 'integer' ],
            [ [ 'five' ], 'string' ],
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
            'four' => 'Four',
            'five' => 'Five',
        ];
    }
}