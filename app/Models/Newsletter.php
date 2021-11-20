<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    Protected $fillable = ['name', 'email'];

    public function rules(){
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:newsletters,email'
        ];
    }

    public function feedback(){
        return [
            'name.min' => 'Nome inválido.',
            'email.unique' => 'E-mail já foi cadastrado.',
            'name.required' => 'Por favor, adicione o seu nome.',
            'email.required' => 'Por favor, adicione o seu e-mail.',
            'email.email' => 'E-mail inválido.'
        ];
    }
}
