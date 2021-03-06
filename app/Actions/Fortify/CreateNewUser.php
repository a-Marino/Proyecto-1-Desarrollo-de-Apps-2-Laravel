<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'apelnom' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'telefono' => ['max:255'],
            'disable' => ['boolean'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'apelnom' => $input['apelnom'],
            'DNI' => $input['DNI'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
            'telefono' => $input['telefono'] ?? null,
            'RUP' => $input['RUP'] ?? null,
        ]);
    }
}
