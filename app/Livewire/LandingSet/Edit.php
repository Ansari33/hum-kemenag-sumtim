<?php

namespace App\Livewire\LandingSet;

use Livewire\Component;
use App\Models\LandingSet;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{
    use WithFileUploads;

    public $namaFile;
    public $elemen;
    public $namaElemen;

    public function render()
    {
        return view('livewire.landing-set.edit');
    }

    public function mount($id)
    {
        // Fetch the data for the given ID and populate the component's properties
        $landingSet = LandingSet::findOrFail($id);
        $this->namaFile = $landingSet->file;
        $this->elemen = null;
        $this->namaElemen = $landingSet->nama;

    }

    public function update()
    {
       

        $landingSet = LandingSet::findOrFail($this->id);
        
        ($this->elemen) ?
        ($this->elemen)->storePubliclyAs('/gambar', $this->namaElemen . '.' . $this->elemen->extension()) : 
        null;
        LivewireAlert::title('Elemen Berhasil Diupdate!')
        ->success()
        ->show(); 

        $landingSet->save();

        return redirect()->route('landing-set');
    }
}
