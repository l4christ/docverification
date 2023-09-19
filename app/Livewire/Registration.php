<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Registration extends Component
{
    public $name;

    public $email;

    public $password;

    public $password_confirmation;

 

    protected function rules() 
    {
        return[
            'name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ];
        

    }

    public function submit()

    {

        $incomingFields = $this->validate();

        $incomingFields['password'] = bcrypt($incomingFields['password']);


 

        // Execution doesn't reach here if validation fails.

 

       $user = User::create([

            'name' => $this->name,

            'email' => $this->email,

            'password' => $this->password

        ]);

        auth()->login($user);

        return redirect('/dashboard');

    }


    public function render()
    {
        return view('livewire.registration');
    }
}
