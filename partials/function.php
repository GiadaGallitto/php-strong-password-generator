<?php

function getUserPassword($strlength, $type){
    if(($strlength != null) && ($type != null)){
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $symbols = '!$%&=?@';
        $new_password = '';
        if($type === 'letters') {
            
            $new_password[] = substr(str_shuffle($letters), 0, $strlength);
        }
        return $new_password;
    }
};

?>