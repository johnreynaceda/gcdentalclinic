<?php

namespace App\Livewire\Patient;

use App\Models\Appointment;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Services extends Component
{
    public $appointmentDate;
    public $appointmentTime;

    public function render()
    {
        $services = Service::all();
        return view('livewire.patient.services', compact('services'));
    }

    public function confirm($serviceId)
    {
        $this->validate([
            'appointmentDate' => 'required|date',
            'appointmentTime' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'service_id' => $serviceId,
            'appointment_date' => $this->appointmentDate,
            'appointment_time' => $this->appointmentTime,
        ]);

        $this->reset(['appointmentDate', 'appointmentTime']);
        flash()->success('Appointment confirmed successfully!');


    }
}
