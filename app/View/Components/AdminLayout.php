<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
  public $page;

  public function __construct($page = "")
  {
    $this->page = $page;
  }

  public function render()
  {
    return view('master.admin');
  }
}
