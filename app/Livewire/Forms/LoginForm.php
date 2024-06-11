<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule(['required', 'email'])]
    public $email;

    #[Rule(['required'])]
    public $password;

    public $remember;

    public function login()
    {
        $this->validate();

        $user = User::query()->where('email', $this->email)->first();
        if (!$user || !Hash::check($this->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials do not match our records.'],
            ]);
        }

        Auth::login($user, $this->remember);

        return redirect()->route('home');
    }
}
