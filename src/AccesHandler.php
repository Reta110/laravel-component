<?php

namespace Reta110;

class AccesHandler
{

    public static function check ($role){

        return 'admin' === $role;

    }

}