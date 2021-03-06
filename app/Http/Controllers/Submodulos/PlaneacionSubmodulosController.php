<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use DB;

use App\Claves_ur;
use App\Claves_fun;
use App\Claves_pp;
use App\Claves_cog;
use App\Claves_gas;
use App\Claves_ff;
use App\Plan_sub15;
use App\Presup_mod;


class PlaneacionSubmodulosController extends Controller
{

    /* SUB3 - Muestra la vista de la solicitud de la MIR */ 
    public function registroMIR()
    {
        return view('submodulos.planeacion.submodulo.registro_mir');
    }

    /* SUB3 - Envía a la vista los datos de los catálogos de claves */ 
    public function catMIR()
    {

        $clave_ur = Claves_ur::pluck('nombre', 'id');
        $clave_fun = Claves_fun::pluck('nombre', 'id');
        $clave_pp = Claves_pp::pluck('nombre', 'id');
        
    return view('submodulos.planeacion.submodulo.registro_mir', compact('clave_ur', 'clave_fun', 'clave_pp'));
}

    /* SUB15 - Muestra la vista de la solicitud */
    public function planeacionsub15()
    {
        return view('submodulos.planeacion.submodulo.carga_presupuesto_aprobado');
    }


    public function create()
    {

        $clave_ur = Claves_ur::pluck('nombre', 'id');
        $clave_fun = Claves_fun::pluck('nombre', 'id');
        $clave_pp = Claves_pp::pluck('nombre', 'id');
        $clave_cog = Claves_cog::pluck('nombre', 'id');
        $clave_gas = Claves_gas::pluck('nombre', 'id');
        $clave_ff = Claves_ff::pluck('nombre', 'id');
        
    return view('submodulos.planeacion.submodulo.carga_presupuesto_aprobado', compact('clave_ur', 'clave_fun', 'clave_pp', 'clave_cog', 'clave_gas', 'clave_ff'));
}


    public function store(Request $request)
    {       

        $input = new Plan_sub15;

        $input->num_sol = $request->num_sol;
        $input->fecha = $request->fecha;
        $input->ur = $request->ur;
        $input->fun = $request->fun;
        $input->pp = $request->pp;
        $input->cog = $request->cog;
        $input->gasto = $request->gasto;
        $input->ff = $request->ff;
        $input->clave = $request->clave;

        $input->just = $request->just;
        $input->techo_presup = $request->techo_presup;
        $input->ene = $request->ene;
        $input->feb = $request->feb;
        $input->mar = $request->mar;
        $input->abr = $request->abr;
        $input->may = $request->may;
        $input->jun = $request->jun;
        $input->jul = $request->jul;
        $input->ago = $request->ago;
        $input->sep = $request->sep;
        $input->oct = $request->oct;
        $input->nov = $request->nov;
        $input->dic = $request->dic;
        $input->total = $request->total;

        $input->save();

        $input = new Presup_mod;
        
        $input->ur = $request->ur;
        $input->fun = $request->fun;
        $input->pp = $request->pp;
        $input->cog = $request->cog;
        $input->gasto = $request->gasto;
        $input->ff = $request->ff;
        $input->clave = $request->clave;
        $input->ene = $request->ene;
        $input->feb = $request->feb;
        $input->mar = $request->mar;
        $input->abr = $request->abr;
        $input->may = $request->may;
        $input->jun = $request->jun;
        $input->jul = $request->jul;
        $input->ago = $request->ago;
        $input->sep = $request->sep;
        $input->oct = $request->oct;
        $input->nov = $request->nov;
        $input->dic = $request->dic;
        $input->total = $request->total;

        $input->save();


    $request->session()->flash('alerta', 'Carga de presupuesto agregada exitosamente');

    return redirect('planeacion/submodulo/carga_presupuesto_aprobado');
}
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultasPresupuestoAprobado()


    {
        return view('submodulos.planeacion.consultas.presupuesto_aprobado');
    }


    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function show()
    {
        $input = DB::table('plan_sub15')->get();

        return view('submodulos.planeacion.consultas.presupuesto_aprobado', ['plan_sub15' => $input]);
    }




}
