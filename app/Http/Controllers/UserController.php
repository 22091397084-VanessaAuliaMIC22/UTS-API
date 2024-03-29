<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request): JsonResponse
    {
        $data = $request->validated();
        if (User::where('username', $data['username'])->exists()) {
            throw new HttpResponseException(response([
                "errors" => [
                    "username" => [
                        "username already registered"
                    ]
                ]
            ], 400));
        }

        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();

        return (new UserResource($user))->response()->setStatusCode(201);
    }

    public function login(UserLoginRequest $request)
    {
        // Memvalidasi permintaan dengan aturan yang telah ditetapkan di UserLoginRequest
        $validatedData = $request->validated();

        // Mencari pengguna berdasarkan username
        $user = User::where('username', $validatedData['username'])->first();

        // Memeriksa apakah pengguna ditemukan dan password yang diberikan cocok
        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            // Jika tidak cocok, mengembalikan respons kesalahan
            throw new HttpResponseException(response()->json([
                "error" => "Username or password is incorrect"
            ], 401));
        }
    }

    public function get(Request $request): UserResource
    {
        $user = Auth::user();
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // Tambahkan validasi untuk bidang lainnya jika diperlukan
        ]);

        // Lakukan pembaruan pengguna
        $user->update($request->all());

        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json([
            "message" => "Successfully logged out"
        ])->setStatusCode(200);
    }
}
