<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Tipo_id_document;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function showCreateUsers()
    {
        return response()->json(['tipo_id_documents' => Tipo_id_document::all()]);
    }
	public function getAllUsers()
	{
		$users = User::get();
		return response()->json(['users' => $users], 200,);
	}

	public function getUserById(User $user)
	{
		return response()->json(['user' => $user], 200,);
	}

	public function saveUser(Request $request)
	{
		$user = new User($request->all());
		$user->save();
		return response()->json(['newUser' => $user], 201,);
	}

	public function updateUser(User $user, Request $request)
	{
		$user->update($request -> all());
		return response()->json(['upsatedUser' => $user->refresh()], 201,);
	}

	public function deleteUser(User $user)
	{
		$user ->delete();
		return response()->json([], 204,);

	}
}
