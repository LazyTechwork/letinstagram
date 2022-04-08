<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostComment extends Component
{
    public string $author;
    public string $text;

    /**
     * @param $author
     * @param $text
     */
    public function __construct($author, $text)
    {
        $this->author = $author;
        $this->text = $text;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-comment');
    }
}
