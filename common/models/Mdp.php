<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sms".
 *
 * @property int $id
 * @property int $user_id
 * @property string $mot_de_passe
 * @property string $description
 * @property string $date_execution
 * @property string $adresse_site
 */
class Mdp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mdp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['numero', 'date_execution'], 'required'],
            [['mot_de_passe', 'user_id', 'description', 'date_execution', 'adresse_site'], 'required'],
            [['mot_de_passe', 'description', 'date_execution', 'adresse_site'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'mot_de_passe' => 'Mot de passe',
            'description' => 'Description',
            'date_execution' => 'Date d\'entrée',
            'adresse_site' => 'Adresse du site',
        ];
    }
}
