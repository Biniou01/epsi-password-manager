<?php


namespace frontend\components;


use yii\base\Component;
use yii\base\Exception;

class Encrypt extends Component
{

    public $pubkey = '...public key here...';
    public $privkey = '...private key here...';

    /**
     * @throws Exception
     */
    public function encrypt($data)
    {
        if (openssl_public_encrypt($data, $encrypted, $this->pubkey)) {
            $data = base64_encode($encrypted);
        } else {
            throw new Exception('Impossible de chiffrer le mot de passe. IL est peut etre plus gros que la taille de la clé...');
        }
        return $data;
    }

    public function decrypt($data)
    {
        if (openssl_private_decrypt(base64_decode($data), $decrypted, $this->privkey)) {
            $data = $decrypted;
        }
        else {
            $data = '';
        }
        return $data;
    }
}