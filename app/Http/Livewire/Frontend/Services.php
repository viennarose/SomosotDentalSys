<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $services_id, $fromService, $serviceId;

    public function setAppt($id){
        $images = Service::findorFail($id);
        $fromService = $this->id = $this->services_id;
        return redirect()->to('/set-appointment');
    }

    public function mount(){
        $this->id = $this->services_id;
    }
    public function getServiceProperty(){
        return Service::find($this->serviceId);
    }


    public function render()
    {
        $images = Service::get();
        return view('livewire.frontend.services', compact('images'));
    }
}
