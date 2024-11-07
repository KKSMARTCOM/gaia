<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            //code...
            $jobs = Job::all();
            return view('admin.job.index', compact('jobs'));
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.job.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'email' => ['required', 'email']
        ], [
            'title.required' => 'Le titre du poste est requis',
            'description.required' => 'La description est requise',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email n\'est pas un email valide',
        ]);

        try {
            //code...
            Job::create([
                'title' => $request->title,
                'description' => $request->description,
                'email' => $request->email,
            ]);

            toastr()->success('Ajout éffectué avec succès', 'Félicitations !');

            return redirect()->back();
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {
            //code...
            $job = Job::where('id', $id)->firstOrFail();
            return view('admin.job.edit', compact('job'));
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'email' => ['required', 'email']
        ], [
            'title.required' => 'Le titre du poste est requis',
            'description.required' => 'La description est requise',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email n\'est pas un email valide',
        ]);

        try {
            //code...
            $job = Job::where('id', $id)->firstOrFail();

            $job->update([
                'title' => $request->title,
                'description' => $request->description,
                'email' => $request->email,
            ]);

            toastr()->success('Mise à jour éffectuée avec succès', 'Félicitations !');

            return redirect()->back();
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            //code...
            $job = Job::where('id', $id)->firstOrFail();
            $job->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }
}
