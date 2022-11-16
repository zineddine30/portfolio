<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $tabs = [];
    public array $items = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category'  => ['Laravel', 'Tailwind.css', 'AlpineJS'],
                'title'     => 'Full Stack app with Laravel, Tailwindcss and AlpineJS',
                'image'     => url('/img/web-app.jpeg'),
                'github'    => '#',
            ],
            [
                'category'  => ['HTML', 'CSS', 'PHP', 'Javascript'],
                'title'     => 'Full Stack app with Laravel, Tailwindcss and AlpineJS',
                'image'     => url('/img/web-app02.jpeg'),
                'github'    => '#',
            ],
            [
                'category'  => ['MySQL'],
                'title'     => 'Full Stack app with Laravel, Tailwindcss and AlpineJS',
                'image'     => url('/img/web-app03.jpeg'),
                'github'    => '#',
            ],


        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
