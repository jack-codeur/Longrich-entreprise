<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductHygieneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.produit_hygiene',
        [
            'products' => Produit::latest()->paginate(9),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.user.prdct_vente.view_produit',
        [
            'products' => Produit::findOrFail($id),
            'all_product' => Produit::latest()->paginate(8)
        ]);
    }
}
