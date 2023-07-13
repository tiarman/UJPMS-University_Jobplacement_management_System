<?php

namespace App\View\Components;

use App\Helper\DateTimeHelper;
use App\Models\Payment;
use Illuminate\View\Component;

class Expiration extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['date'] = null;
      if ($payment =  Payment::select('next_due_date')->orderby('next_due_date', 'DESC')->first()){
        $data['date'] = DateTimeHelper::dateFormatter($payment->next_due_date, 'F d, Y');
      }
        return view('components.expiration', $data);
    }
}
