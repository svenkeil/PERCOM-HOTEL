<?php

namespace App\Transformers;
use App\Admin\Role;
use League\Fractal\TransformerAbstract;

class RoleTransformer extends TransformerAbstract{
    public function transform(Role $role)
    {
        return [
            'role'=> $role->name,
        ];
    }
}