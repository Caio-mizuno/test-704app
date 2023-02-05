<?php
namespace App\Enums;


enum AccessTokenEnum:string {

    case User   = 'user';
    case Driver = 'driver';
    case Client = 'client';

}
