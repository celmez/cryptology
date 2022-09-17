<?php
    require_once 'datas.php';
    class Crypto
    {
        public function create( $data )
        {
            return openssl_encrypt( $data, CIPHER, KEY ); // Belirlediğiniz algoritma ve şifreleme anahtarı ile şifreleme yapar
        }

        public function defuse( $data )
        {
            $islem = openssl_decrypt( $data, CIPHER, KEY ); // Belirlediğiniz algoritma ve şifreleme anahtarı ile belirlediğiniz kriptoyu çözer

            if( !$islem )
            {
                return $dataError = 'Hatalı kod';
            }

            return $islem;
        }
    }
?>