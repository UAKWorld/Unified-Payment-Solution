<?php
namespace App\Controllers;

class Default_Controller extends BaseController
{
    protected $helpers = [];
    protected $libraries = [];
    
    public function __construct()
    {
        helper(['url', 'form', 'session']);
        $this->session = \Config\Services::session();

        set_time_limit(0);
        ini_set('memory_limit', '20000M');
    }
}
