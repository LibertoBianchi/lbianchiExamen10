<?php

namespace App\Http\Controllers;

use App\Models\publicacion;
use Illuminate\Http\Request;

class publicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = publicacion::all();
        return view('publication.createProjectForm')->with('publications',$publications);
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
//Validación con font
//Intento de validacion con formRequest
    public function guardar(Request $request)
    {
        $request->validate([
            'publicationName' => 'required',
            
            'publicationContent' => 'required',
            'publicationDate' => 'required'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// ELOQUENT  He usado valores iguales por que no me daba tiempo /*
publiacion::create([
    'publicationName' => $this->input('publicationName'),
    
]);

/*
 *
 QUERY BUILDER
    DB::table('publicacio)->insert([
        
       

        'publicationName' => $this->str_random(publicationName),
        'publicationName' => $request->input('publicationName'),
        'publicationName' => $request->input('publicationName'),
       
    ]);


  


    RAW
    DB::insert('insert into publicacio (publicationName,publicationExtract,publicationDescription,publicationDate) values (?,?,?,?)',$this->str_random(5),
    $request->input('publicationName'),$request->input('publicationName'),$request->input('publicationName'),$request->input('publicationName'));
 * */





        
        $publications = new publicacion();
$publications->publicationName =$request->get('publicationName');
$publications->publicationExtract =$request->get('publicationExtract');
$publications->publicationContent =$request->get('publicationContent');
$publications->publicationDate =$request->get('publicationDate');
$publications->save();
return view('publication.createProjectForm')->with('publications',$publications);
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
}
