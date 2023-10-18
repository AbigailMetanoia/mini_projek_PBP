<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    use WithFileUploads;

    public $noktp = '';
    public $name = '';
    public $alamat = '';
    public $kota = '';
    public $no_telp = '';
    public $email = '';
    public $password = '';
    public $file_ktp = '';

    protected $rules = [
        'noktp' => 'required|max:16',
        'name' => 'required|min:3',
        'alamat' => 'required|max:50',
        'kota' => 'required|max:25',
        'no_telp' => 'required|regex:/^[0-9]+$/|min:8',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6',
        'file_ktp' => 'required|image|file|max:1024',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }


    public function register() {
        $validatedData = $this->validate();
        $this->validate();
        if($this->file_ktp){
            $validatedData['file_ktp'] = $this->file_ktp->store('files_ktp');
        }
        $user = User::create([
            'noktp' => $this->noktp,
            'name' => $this->name,
            'kota' => $this->kota,
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'file_ktp' => $this->file_ktp,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect('/dashboard');
        // return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
