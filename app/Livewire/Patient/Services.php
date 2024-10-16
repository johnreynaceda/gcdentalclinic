<?php

namespace App\Livewire\Patient;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Services extends Component
{
    public $appointmentDate;
    public $appointmentTime;

    public $selected_category ;

    public function render()
    {
       
        return view('livewire.patient.services', [
            'services' => Service::when($this->selected_category, function($record){
                $record->where('service_category_id', $this->selected_category);
            })->get(),
            'categories' => ServiceCategory::all(),
        ]);
    }

    public function confirm($serviceId)
    {
        $this->validate([
            'appointmentDate' => 'required|date',
            'appointmentTime' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'user_id' => Auth::id(),
            'patient_id' => Auth::user()->patient_id,
            'service_id' => $serviceId,
            'appointment_date' => $this->appointmentDate,
            'appointment_time' => $this->appointmentTime,
        ]);

        $this->reset(['appointmentDate', 'appointmentTime']);
        flash()->success('Appointment confirmed successfully!');


    }
}
