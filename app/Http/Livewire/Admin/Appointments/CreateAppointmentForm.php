<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\Appointment;
use Livewire\Component;
use App\Models\Client;

class CreateAppointmentForm extends Component
{
    public $state = [];

    public function createAppointment()
    {
        $this->state['status'] = 'open';
        Appointment::create($this->state);

        $this->dispatchBrowserEvent('alert', [
            'message' => 'Appointment created successfully!'
        ]);
    }

    public function render()
    {
        $clients = Client::all();
        return view('livewire.admin.appointments.create-appointment-form', [
            'clients' => $clients,
        ]);
    }
}
