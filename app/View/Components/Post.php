<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public \App\Models\Post $post;

    /**
     * @param \App\Models\Post $post
     */
    public function __construct(\App\Models\Post $post) { $this->post = $post; }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
