<?php

namespace App\Transformers;
use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'pseudo'=> $user->pseudo,
            'email'=> $user->email,
            'role' => $user->role,
            'password'=> $user->password,
            'activate_key'=> $user->activate_key,
            'reset_key'=> $user->reset_key,
        ];
    }
}