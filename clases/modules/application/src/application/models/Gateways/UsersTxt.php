<?php
namespace application\models\Gateways;

class UsersTxt extends \core\adapters\TxtAdapter
{

    public function getUsers()
    {
        return $this->fetch();
    }
}