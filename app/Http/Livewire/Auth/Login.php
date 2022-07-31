<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'email',
            'password' => 'min:8',
        ]);
    }

    public function login()
    {
         $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('dashboard');
        }
        session()->flash('error', 'Invalid Credentials');
        return redirect()->route('login');

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
