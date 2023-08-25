<?php
require_once "Model.php";

class sessionManager extends Model
{
    function member(){
        $req = $this->getDb()->prepare('SELECT member, pass FROM membership WHERE id = 2');
        $req->execute();
        return $req->fetch();
    }
}