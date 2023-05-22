<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Notifications\Notification;
use Livewire\Component;

class Home extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms; 

    public $water_meter_id = '';

    public function mount(): void
    {
        $this->form->fill([]);
    }

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('water_meter_id')
                ->disableLabel()
                ->required(),
        ];
    } 

    public function submit(): void
    {
        try {
            throw new \Exception("Error Processing Request", 1);
            
            Notification::make()
                ->title('Form submitted')
                ->success()
                ->send();
        } catch (\Exception $e) {
            // dd($e);
            Notification::make()
                ->title('Terjadi kesalahan teknis')
                ->danger()
                ->send();
        }
    }

    public function render()
    {
        return view('livewire.home')
            ->extends('layouts.app')
            ->section('main');
    }
}
