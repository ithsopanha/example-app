<?php
namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=>'Lorem Ipsum dolor'
            ],
            [
                'id'=>2,
                'title'=>'Listing Two',
                'description'=>'Lorem Ipsum dolor 2'
            ],
            [
                'id'=>3,
                'title'=>'Listing Three',
                'description'=>'Lorem Ipsum dolor 3'
            ]
          ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
        }
    }
}
?>