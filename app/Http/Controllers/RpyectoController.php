<?php

namespace App\Http\Controllers;

use App\Models\Rpyecto;
use Illuminate\Http\Request;

/**
 * Class RpyectoController
 * @package App\Http\Controllers
 */
class RpyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rpyectos = Rpyecto::paginate();

        return view('rpyecto.index', compact('rpyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $rpyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rpyecto = new Rpyecto();
        return view('rpyecto.create', compact('rpyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rpyecto::$rules);

        $rpyecto = Rpyecto::create($request->all());

        return redirect()->route('rpyectos.index')
            ->with('success', 'Rpyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rpyecto = Rpyecto::find($id);

        return view('rpyecto.show', compact('rpyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rpyecto = Rpyecto::find($id);

        return view('rpyecto.edit', compact('rpyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rpyecto $rpyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rpyecto $rpyecto)
    {
        request()->validate(Rpyecto::$rules);

        $rpyecto->update($request->all());

        return redirect()->route('rpyectos.index')
            ->with('success', 'Rpyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rpyecto = Rpyecto::find($id)->delete();

        return redirect()->route('rpyectos.index')
            ->with('success', 'Rpyecto deleted successfully');
    }
}
