<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserPasswordMail;


class UserController extends Controller
{
    /**
     * Afficher la liste des utilisateurs.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    

    /**
     * Afficher le formulaire de création d'un utilisateur.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Enregistrer un nouvel utilisateur.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'status' => 'boolean',
        ]);
    
        // Génération d'un mot de passe aléatoire
        $generatedPassword = Str::random(8);
    
        // Création de l'utilisateur avec le mot de passe généré
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($generatedPassword),
            'status' => $request->status ?? 1,
        ]);
        // Envoi d'un email avec le mot de passe
        Mail::to($user->email)->send(new NewUserPasswordMail($user, $generatedPassword));

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur créé avec succès. Le mot de passe a été envoyé par email.');
    }

    /**
     * Afficher un utilisateur spécifique.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Afficher le formulaire d'édition d'un utilisateur.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Mettre à jour un utilisateur.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            // 'password' => 'nullable|string|min:8|confirmed',
            'status' => 'boolean',
            'is_admin' => 'boolean',
            'avatar' => 'nullable|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => $request->password ? bcrypt($request->password) : $user->password,
            'status' => $request->status ?? $user->status,
            'is_admin' => $request->is_admin ?? $user->is_admin,
            'avatar' => $request->avatar ?? $user->avatar,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    /**
     * Supprimer un utilisateur.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}