<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TestValidatedController extends Controller
{
    public function store(Request $request, Model $model)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['email', 'unique:table,email']

        ]);
        
        $model = new Model();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->save();
    }

    public function update(Request $request, $id)
    {
        $model = Model::find($id);

        if ($model) {
            $request->validate([
                'name' => ['required'],
                'email' => ['email', 'unique:table,email']
            ]);

            $model->name = $request->name;
            $model->email = $request->email;
            $model->save();

            return;
        }

        return;
    }
}
