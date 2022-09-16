<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferCard extends Component
{
    public $months;
    public $old;
    public $new;
    public $status;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($months, $old, $new, $status="inactive")
    {
        $this->months = $months;
        $this->old = $old;
        $this->new = $new;
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offer-card');
    }
}
