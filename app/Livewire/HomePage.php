<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public string $activeNav = 'home';

    public function setActiveNav(string $nav): void
    {
        $this->activeNav = $nav;
    }

    public function render()
    {
        return view('home-page')
            ->layout('layouts.app');
    }
}