<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderTest;
use Illuminate\Http\Request;

class OrderTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = OrderTest::latest()->get();

        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'building_type' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'service_id' => 'required|exists:services,id',
            'commune_id' => 'required|exists:communes,id',
            'price' => 'nullable|numeric|min:0',
            'topographic_survey' => 'nullable|file|mimes:pdf|max:2048',
        ], [
            'lastname.required' => 'Le nom de famille est obligatoire.',
            'lastname.string' => 'Le nom de famille doit être une chaîne de caractères.',
            'lastname.max' => 'Le nom de famille ne doit pas dépasser 255 caractères.',

            'firstname.required' => 'Le prénom est obligatoire.',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères.',
            'firstname.max' => 'Le prénom ne doit pas dépasser 255 caractères.',

            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'phone.max' => 'Le numéro de téléphone ne doit pas dépasser 20 caractères.',

            'building_type.required' => 'Le type de batiment est obligatoire.',
            'building_type.string' => 'Le type de batiment doit être une chaîne de caractères.',
            'building_type.max' => 'Le type de batiment ne doit pas dépasser 255 caractères.',

            'address.string' => 'L\'adresse doit être une chaîne de caractères.',
            'address.max' => 'L\'adresse ne doit pas dépasser 255 caractères.',

            'email.email' => 'Veuillez fournir une adresse email valide.',
            'email.max' => 'L\'adresse email ne doit pas dépasser 255 caractères.',

            'service_id.required' => 'Le service est obligatoire.',
            'service_id.exists' => 'Le service sélectionné est invalide.',

            'commune_id.required' => 'La commune est obligatoire.',
            'commune_id.exists' => 'La commune sélectionnée est invalide.',

            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix doit être au moins égal à 0.',

            'topographic_survey.file' => 'Le fichier doit être un fichier valide.',
            'topographic_survey.mimes' => 'Le fichier doit être au format PDF.',
            'topographic_survey.max' => 'Le fichier PDF ne doit pas dépasser 2 Mo.',
        ]);

        //dd($request->all());

        try {
            //code...
            $pdf = handleUpload('topographic_survey');

            OrderTest::create([
                'lastname' => $request->lastname,
                'firstname' => $request->firstname,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'service_id' => $request->service_id,
                'commune_id' => $request->commune_id,
                'building_type' => $request->building_type,
                'price' => $request->price,
                'topographic_survey' => $pdf,
            ]);

            toastr()->success('Votre demande d\'essai a été bien reçu', 'Félicitations !');

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
        $order = OrderTest::where('id', $id)->firstOrFail();

        return view('admin.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            //code...
            $order = OrderTest::where('id', $id)->firstOrFail();
            $order->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }

    public function sheetDownload(string $id)
    {
        $order = OrderTest::where('id', $id)->firstOrFail();
        //dd($order->topographic_survey);
        return response()->download(public_path($order->topographic_survey));
    }
}
