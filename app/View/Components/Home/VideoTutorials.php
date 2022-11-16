<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => '8z6i9vy2z-4',
                'title' => 'PHP Tutorial for Absolute Begenners - PHP Course 2021',
                'description' => 'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP. this is good',
            ],
            [
                'videoId' => '8z6i9vy2z-4',
                'title' => 'PHP Tutorial for Absolute Begenners - PHP Course 2021',
                'description' => 'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP. this is good',
            ],
            [
                'videoId' => '8z6i9vy2z-4',
                'title' => 'PHP Tutorial for Absolute Begenners - PHP Course 2021',
                'description' => 'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP. this is good',
            ],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
