<?php
/*

Author: Excellence Soft - by Junior Oliveira


 */
namespace SiteEspindola\Http\Controllers;

use SiteEspindola\Immobile;
use Illuminate\Http\Request;

class ImmobileController extends Controller
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

    public function allCoordinates()
    {
        # code...
    }
    
    public function show($id)
    {
        $immobile = Immobile::find($id);
        return response()->json($immobile);
    }

    public function all()
    {
        $immobile = Immobile::all();
        return response()->json($immobile);
    }

    public function create(Request $request) {
        return $request->all();
    }
}
