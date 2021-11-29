<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NoneLayout extends Component
{
  public function render()
  {
    return view('master.none');
  }
}
