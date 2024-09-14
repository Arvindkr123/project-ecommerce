<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function register()
    {
        if ($this->request->getMethod() === 'get') {
            return view('register');
        }

        if ($this->request->getMethod() === 'post') {

            $validationRules = [
                "username"  => "required",
                "email"     => "required|valid_email",
                "password"  => "required|min_length[5]|max_length[20]",
                "cpassword" => "matches[password]"
            ];

            // Validate form
            if (!$this->validate($validationRules)) {
                // Return validation errors to view
                return redirect()->back()->withInput();
            } else {
                // Validation passed, process the data
                $username = $this->request->getVar('username');
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $cpassword = $this->request->getVar('cpassword');

                // For now, just echo the values (you can replace this with actual logic)
                echo $username, $email, $password, $cpassword;
            }
        }
    }


    public function login()
    {
        return view('login');
    }
}
