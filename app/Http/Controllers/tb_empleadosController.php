<?php

namespace App\Http\Controllers;
use App\Models\tb_empleados;
use App\Models\tb_relacion_areas;
use App\Models\tb_sueldos;
use Illuminate\Http\Request;

class tb_empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$empleados = tb_empleados::select('*')
        //   ->join('tb_relacion_areas', 'tb_relacion_areas.id', '=', 'tb_relacion_areas.id_area',)
        //    ->get(); 
        //return $empleados;
        $empleados = tb_empleados::all();
        $sueldos = tb_sueldos::all();      

        return view('empleados.index', compact('empleados', 'sueldos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sueldos = tb_sueldos::all();
        $relacion  = tb_sueldos::all();
        $empleados = tb_empleados::all();
        $areas = tb_relacion_areas::all();

        return view('empleados.add',compact('sueldos','empleados','areas','relacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new tb_empleados();
        $empleados->clave = $request->post('clave');
        $empleados->nombre = $request->post('nombre');
        $empleados->app = $request->post('app');
        $empleados->apm = $request->post('apm');
        $empleados->gen = $request->post('gen');
        $empleados->fn = $request->post('fn');

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationpath = 'img/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('foto')->move($destinationpath, $filename);
            $empleados->foto = $destinationpath . $filename;  
 
        }
        
        $empleados->sueldo = $request->post('sueldo');
        $empleados->areas = $request->post('areas');
        $empleados->relacion_areas = $request->post('relacion_areas');
        $empleados->email = $request->post('email');
        $empleados->pass = $request->post('pass');
        $empleados->activo = $request->post('activo');
        $empleados->save();
        return redirect()->route("empleados.index")->with("success", "¡Agregado con exito!");
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
        $empleados = tb_empleados::findOrFail($id);
        $areas = tb_relacion_areas::all();

        return view('empleados.edit',compact('empleados','areas')); 

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
        return redirect()->route("empleados.index");
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
