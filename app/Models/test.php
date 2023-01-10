<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{

    public static function all1 () {
        return [
            [
                'id' => 1 ,
                'name' => 'mina' ,
                'ps' => '123'
            ],
            [
                'id' => 2 ,
                'name' => 'ata' ,
                'ps' => '456'
            ]
        ] ;
    }


public static function found_data ($id) {
    return self::all1($id) ;
}

}
