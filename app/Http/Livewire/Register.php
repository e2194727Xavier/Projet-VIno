<?php
namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $passwordConfirmation;

  
    public function register()
{
    $validator = Validator::make([
        'firstName' => $this->firstName,
        'lastName' => $this->lastName,
        'email' => $this->email,
        'password' => $this->password,
        'passwordConfirmation' => $this->passwordConfirmation,
    ], [
        'firstName' => 'required|string|min:2',
        'lastName' => 'required|string|min:2',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|same:passwordConfirmation',
    ], [
        'required' => 'Le champ :attribute est obligatoire.',
        'string' => 'Le champ :attribute doit être une chaîne de caractères.',
        'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
        'unique' => 'Le champ :attribute existe déjà.',
        'min' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'same' => 'La confirmation du champ :attribute ne correspond pas.',
    ]);

    if ($validator->fails()) {
        foreach ($validator->errors()->getMessages() as $field_name => $errors) {
            // Here we're adding the errors to the form fields
            $this->addError($field_name, $errors[0]);
        }
    } else {
        User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset();
        $this->emit('registerSuccess');
    }
}


    public function render()
    {
        return view('livewire.register');
    }
}

