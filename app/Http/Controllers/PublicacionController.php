<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDivulgacion()
    {
        $publicaciones = Publicacion::where('activo','=',1,)->orderBy('titulo','desc')->paginate(10);
        return view('publicaciones.index',compact('publicaciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'image'=>'image|max:5120',

        ]);

        $publicacion = new Publicacion;
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->link = $request->input('link');
        $publicacion->anio = $request->input('anio');
        $publicacion->categoria = $request->input('categoria');
        
        $image = $request->input('imagen');

        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('images-publicaciones')->put($image_path, \File::get($image));
            $publicacion->image = $image_path;
        }
        $publicacion->save();

        return redirect()->route('publicaciones.create')->with(array(
            'message'=>'Se ha guardado correctamente'
        ));
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
        $publicacion = Publicacion::find($id);
        return view('publicaciones.edit',compact('publicacion'));
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
        $validateData = $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'image'=>'image|max:5120',
        ]);

        $publicacion = new Publicacion;
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion = $request-> input('descripcion');
        $publicacion->link = $request->input('link');
        $publicacion->categoria = $request->input('categoria');
        
        $image = $request->input('imagen');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Store::disk('images-publicacion')->put($image_path, \File::get($image));

            $publicacion->image = $image_path;
        }
        $publicacion->update();

        return redirect()->route('publicaciones.create')->with(array(
            'message'=>'Se ha actualizado correctamente'
        ));
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
