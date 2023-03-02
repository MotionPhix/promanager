<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MemberSelector extends Component
{
  public $members;
  public $selected;
  public $isOpen;

  public function __construct($members = [])
  {
    $this->members = $members;
    $this->selected = 'Select a member';
    $this->isOpen = false;

    // dd($members);
  }

  public function select($member)
  {
    $this->selected = $member->name;
    $this->isOpen = false;
  }

  public function render(): View|Closure
  {
    return view('components.member-selector');
  }
}
