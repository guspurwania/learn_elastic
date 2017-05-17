<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['users'] = User_model::all();
        $data['title'] = "data";
        $this->twig->display('user', $data);
    }
}