<?php
namespace App\Controllers;
use CodeIgniter\HTTP\RedirectResponse;
class PagesController extends BaseController
{
   public function index():bool|string{
        echo $this->model->test();
        return false;
    }

}