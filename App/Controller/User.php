<?php


// User Management System

class User extends Database {

    // User Add TO Database
    public function userTumiJao($name,$email,$cell,$username){


        parent:: Create("Insert Into users (name,email,cell,username) Values ('$name','$email','$cell','$username')");


    }


    // All Users

    public function sobUserCholeyAsho(){

       return parent::All("users");

    }


    // Delete User Account

    public function userDhongsho($id){

        parent::Delete("users",$id);
    }

    // Edit User Account

    public function userEditKoro($id){

        parent::Find("users",$id);

    }




}