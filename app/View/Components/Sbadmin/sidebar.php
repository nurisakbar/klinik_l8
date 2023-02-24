<?php

namespace App\View\Components\Sbadmin;

use App\Models\Menu;
use Illuminate\View\Component;

class sidebar extends Component
{

  //public $menus;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct()
  {
    //$this->menus = Menu::orderBy('sequence_number')->get();
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|string
   */
  public function render()
  {
    $menus = Menu::orderBy('sequence_number')->get();
    // return view('components.sbadmin.sidebar', compact("menus"));
    //return view('components.sbadmin.sidebar');

    return view('components.sbadmin.sidebar')->with('menus', $menus);
  }
}
