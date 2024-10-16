<?php

namespace App\Livewire\Secretary;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class Records extends Component
{
    use WithPagination;

    public function render()
    {

        $appointments = Appointment::where('status', 'approved')->paginate(10);

        return view('livewire.secretary.records', [
            'appointments' => $appointments,
        ]);
    }
}
