<?php

if (!defined("_ECRIRE_INC_VERSION"))
    return;
$e = sql_select("nom", "spip_auteurs", "id_auteur=1");
$e = sql_fetch($e);


$a = '[(#ENV{toto})]';
var_dump($e);
