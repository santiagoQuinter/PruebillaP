<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cliente as ClienteModel;
use App\Http\Requests\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = ClienteModel::all();

        return view('index', [
            'clientes' => $clientes,
        ]);
    }

    public function create()
    {
        return view('cliente');
    }

    public function store(Cliente $request)
    {
        $data = $request->validated();
        $newConsultant = new ClienteModel;
        $newConsultant->fill($data);
        $newConsultant->save();
        return redirect('cliente')->with('mensaje','Cliente Registrado exitosamente');;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente= ClienteModel::findOrFail($id);
        return view('editar', [
            'cliente' => $cliente,
        ]);
    }

    public function update(Cliente $request, $id)
    {
        $data = $request->validated();
        $clienteUpdate = ClienteModel::findOrFail($id);
        $clienteUpdate->fill($data);
        $clienteUpdate->save();
        return redirect('cliente')->with('mensaje','Cliente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $clienteDelete = ClienteModel::findOrFail($id);
        $clienteDelete->delete();
        return redirect('cliente')->with('mensaje','Cliente Eliminado exitosamente');
    } 
}
