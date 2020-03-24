<?php

use yii\db\Migration;
use common\models\User;

/**
 * Class m200321_120903_add_user
 */
class m200321_120903_add_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $user = new User();
        $user->username = 'admin';
        $user->email = 'milena.nasibyan@gmail.com';
        $user->status = 10;
        $user->setPassword('a1d2m34i5i');
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200321_120903_add_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200321_120903_add_user cannot be reverted.\n";

        return false;
    }
    */
}
