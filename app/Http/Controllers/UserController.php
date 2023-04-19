<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = User::with('constructions.wastes')->simplePaginate(10);
            return response()->json($users, 200);
        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro ao listar usuários']], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            return response()->json($user, 201);
        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro ao criar o usuario']], 400);
        }
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
            $user = User::with('constructions.wastes')->findOrFail($id);
            return response()->json($user, 200);
        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro ao listar o usuário']], 400);
        }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        try {
            $data = $request->all();
            $user = User::findOrFail($id);
            $user->update($data);
            return response()->json($user, 200);
        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro ao atualizar o usuário']], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json('Usuário deletado com sucesso!', 200);
        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro ao deletar o usuário']], 400);
        }
        
    }
}

