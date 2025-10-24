<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = request ()-> input ('name');
        $family = request ()-> input ('family');
        $user = ['name'=> $name , 'family'=> $family];
        $json_user = json_encode($user);

        file_put_contents ('users.json',$json_user);
        return "User Successfully Created";
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $file_data = file_get_contents ('users.json');
        $user = json_decode($file_data);

        return view ('edit', ['user' => $user]);
    }
    public function update(Request $request, string $id)
    {
        $name = request() -> input =('name');
        $family = request()-> input = ('family');

        $user = ['name' => $name , 'family' => $family];
        $json_user = json_encode($user);

        file_put_contents ('users.json', $json_user);
        return "User Successfully Updated";
    }
    public function destroy(string $id)
    {
        //
    }
}
