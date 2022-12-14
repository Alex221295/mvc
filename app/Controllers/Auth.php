<?php
namespace App\Controllers;
class Auth
{
    private function validation($info){
        foreach ($info as $key=>$infoForUser){
            if (!$infoForUser){
                die("Введите $key");
            }
        }
    }
    public function register($data,$files)
    {
//        de($data);
        $info = [
        'Email' => $data['email'],
        'User Name' => $data['user_name'],
        'Full name' => $data['full_name'],
        'Password' =>$data['password'],
            ];

        $this->validation($info);
        echo 'Register Action';
    }

}