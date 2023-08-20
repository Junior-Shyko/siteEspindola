<?php

namespace SiteEspindola\Http\Controllers;

use Illuminate\Http\Request;
use SiteEspindola\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
            Newsletter::create($request->all());
            return redirect()->route('sucesso-newsletter');

        } catch (Exception $e) {

            
            return redirect()->route('404');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function success()
    {
        $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('public/img/site/logo_redes.png')];
        return view('site.sucess-news' , compact('meta_site'));
    }
}
