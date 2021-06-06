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

    public function userEdit($id){

        return parent::Find("users",$id);

    }

    // View User Account

    public function userView($id){

        return parent::Find("users",$id);

    }

    // Update User Data

    public function userUpdate($id,$name,$email,$cell,$username){

        parent::Update("UPDATE users SET name='$name', email='$email', cell='$cell', username ='$username' WHERE id='$id'");

    }





}