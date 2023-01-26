<?php

function getUserPassword($strlength){
    if($strlength != null){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&=?@';
        return substr(str_shuffle($chars), 0, $strlength);
    }
};

?>