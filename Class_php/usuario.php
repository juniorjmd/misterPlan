<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Class_php;

/**
 * Description of usuario
 *
 * @author junio
 */
class usuario {
 
    private $id;
    public $gender;
    public $name;
    public $street;
    public $city;
    public $state;
    public $country;
    public $postcode;
    public $email;
    private $username;
    private $sha1;
    public $registered;
    public $phone;
    public $cell;
    public $urlPicturiLarge;
    public $urlPicturiMedium;
    public $urlPicturiThumbnail;
    public function __construct(  $gender,
                                    $name,
                                    $street,
                                    $city,
                                    $state,
                                    $country,
                                    $postcode,
                                    $email,
                                    $username,
                                    $sha1,
                                    $registered,
                                    $phone,
                                    $cell,
                                    $urlPicturiLarge,
                                    $urlPicturiMedium,
                                    $urlPicturiThumbnail    ) { 
        
        $this->gender=$gender;
        $this->name=$name;
        $this->street=$street;
        $this->city=$city;
        $this->state=$state;
        $this->country=$country;
        $this->postcode=$postcode;
        $this->email=$email;
        $this->username=$username;
        $this->sha1=$sha1;
        $this->registered=$registered;
        $this->phone=$phone;
        $this->cell=$cell;
        $this->urlPicturiLarge=$urlPicturiLarge;
        $this->urlPicturiMedium=$urlPicturiMedium;
        $this->urlPicturiThumbnail=$urlPicturiThumbnail;
        
        
    }
    private function getUsersArray()
    {      
        $arrUser["gender"]      =      $this->gender;
        $arrUser["name"]        =      $this->name;
        $arrUser["street"]      =      $this->street;
        $arrUser["city"]        =      $this->city;
        $arrUser["state"]       =      $this->state;
        $arrUser["country"]     =      $this->country;
        $arrUser["postcode"]    =      $this->postcode;
        $arrUser["email"]       =      $this->email;
        $arrUser["username"]    =      $this->username;
        $arrUser["sha1"]        =      $this->sha1;
        $arrUser["registered"]  =      $this->registered;
        $arrUser["phone"]       =      $this->phone;
        $arrUser["cell"]        =      $this->cell;
        $arrUser["urlPicturiLarge"]      =      $this->urlPicturiLarge;
        $arrUser["urlPicturiMedium"]     =      $this->urlPicturiMedium;
        $arrUser["urlPicturiThumbnail"]  =      $this->urlPicturiThumbnail;
       // print_r($arrUser);
        return $arrUser;
        
    }
        
    static function getUserById( $id ){
         try {
            $conexion = DataBase::getInstance();  
             $retorno =  $conexion->where("usuarios" , "id = $id"); 
             $arrUser = $retorno[datos];
             $user = new self(  $arrUser["gender"] ,
                                $arrUser["name"] ,
                                $arrUser["street"] ,
                                $arrUser["city"]  ,
                                $arrUser["state"]   ,
                                $arrUser["country"]  ,
                                $arrUser["postcode"]  ,
                                $arrUser["email"]    ,
                                $arrUser["username"] ,
                                $arrUser["sha1"]      ,
                                $arrUser["registered"] ,
                                $arrUser["phone"]     ,
                                $arrUser["cell"]   ,
                                $arrUser["urlPicturiLarge"]  ,
                                $arrUser["urlPicturiMedium"] ,
                                $arrUser["urlPicturiThumbnail"] 
                     );
              $user->id = $id;
             return $user ;
        } catch (Exception $e) {
            return [false,$e->getMessage()];
        } 
    }
    public function save(){
        try {
            $conexion = DataBase::getInstance();  
             $retorno =  $conexion->insert("usuarios" , $this->getUsersArray()); 
             return $retorno ;
        } catch (Exception $e) {
            return [false,$e->getMessage()];
        } 
    }
    
}
