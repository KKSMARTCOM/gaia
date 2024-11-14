<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth()->user();

        return view('admin.setting.profile.index', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        //dd($request->all());

        $user = User::where('email', Auth()->user()->email)->firstOrFail();

        $request->validate([
            'name' => 'required|min:2',
            'email' => ['required', 'email', function ($attribute, $value, $fail) use ($user) {
                // Si l'utilisateur entre un nouvel email
                if ($value !== $user->email) {
                    // Vérification de l'unicité de l'email
                    if (User::where('email', $value)->exists()) {
                        $fail('Cet email est déjà utilisé.');
                    }
                }
            }]
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'Vous devez entrer une adresse email valide',
        ]);


        // Vérification de l'ancien mot de passe
        try {

            if ($request->hasFile('avatar')) {

                deleteFile(Auth()->user()->avatar);

                $img = $request->file('avatar');
                $folderName = $request->name;
                $uploadFolder = 'assets/img/avatar/';
                folderOpen($uploadFolder);
                $imgurl = uploadImage($img, $folderName, $uploadFolder);
            }

            //dd($request->all());

            $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'avatar' => $imgurl ?? Auth()->user()->avatar,
                ]
            );

            return redirect()->back()->with('success', 'Profile mis à jour avec succès.');
        } catch (\Exception $e) {
            dd($e);
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    public function passwordUpdate(Request $request)
    {
        //dd($request->all());

        $user = User::where('email', Auth()->user()->email)->firstOrFail();

        $request->validate([
            'old_password' => 'required_with:password',
            'password' => [
                "required",
                "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&#^_;:,])[A-Za-z\d@$!%*?&#^_;:,]{6,}$/",
                "confirmed"
            ],
        ], [
            'password.required' => 'Le nouveau mot de passe est obligatoire.',
            'password.regex' => 'Le mot de passe doit contenir au moins 6 caractères, avec une majuscule, une minuscule, un chiffre et un caractère spécial.',
            'password.confirmed' => 'Vous devez confirmer avec le même mot de passe',
            'old_password.required_with' => 'Vous devez entrez l\'ancien mot de passe pour changer le mot de passe',
        ]);

        try {

            if ($request->filled('old_password')) {
                if (!Hash::check($request->old_password, $user->password)) {
                    return back()->withErrors([
                        'old_password' => 'L\'ancien mot de passe est incorrect.'
                    ]);
                }
            }

            //dd($request->all());

            // Si l'ancien mot de passe est correct, et un nouveau mot de passe est fourni, on peut le mettre à jour
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            return redirect()->back()->with('success', 'Profile mis à jour avec succès.');
        } catch (\Exception $e) {
            dd($e);
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
