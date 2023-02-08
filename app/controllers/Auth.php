<?php

class Auth extends Controller 
{
    public function index()
    {

        $data["judul"] = "Halaman Login";

        $this->view("templates/header", $data);
        $this->view("auth/login");
        $this->view("templates/footer");
    }

    public function register()
    {
        

        $data["judul"] = "Halaman Register";

        $this->view("templates/header", $data);
        $this->view("auth/register");
        $this->view("templates/footer");
    }
}