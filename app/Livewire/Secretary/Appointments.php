<?php

namespace App\Livewire\Secretary;

use App\Models\Appointment;
use Livewire\Component;

class Appointments extends Component
{
    public $appointments;

    public function mount()
    {

        $this->appointments = Appointment::all();
    }

    public function approve($id)
    {

        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->status = 'approved';
            $appointment->save();
        }
    }

    public function decline($id)
    {

        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->status = 'declined';
            $appointment->save();
        }
    }

    public function render()
    {
        return view('livewire.secretary.appointments');
    }
}
