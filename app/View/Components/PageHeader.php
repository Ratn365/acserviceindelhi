<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $title;
    public $subtitle;

    public function __construct($title, $subtitle)
    {
       $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('components.page-header');
    }
}
