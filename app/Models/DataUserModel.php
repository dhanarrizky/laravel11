<?php

namespace App\Models;

class DataUserModel {
   public static function all(){
       return [
           [
               'firstname' => 'firstname one',
               'lastname' => 'lastname one',
           ],
           [
               'firstname' => 'firstname two',
               'lastname' => 'lastname two',
           ]
           ];
   }
}
