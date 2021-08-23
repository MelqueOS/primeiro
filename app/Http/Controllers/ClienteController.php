<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		/*return response()->json([
			"acao" => "sucesso"
		]);*/
		/*
		 O codigo abaixo renderiza a pagina de index e envia os dados de clientes  para ela
		*/
		$clientes = Clientes::All();
		$cliente = new Clientes();
        return view(
					"cliente.index", 
					[
						"clientes" => $clientes,
						"cliente" => $cliente
					]
		);
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
        //o codigo abaixo sera usado para criar novos dados para cliente
		if($request->get("id")== ""){
			$cliente = new Clientes();
		}else{
			$cliente = Clientes::Find($request->get("id"));
		}
			$cliente->nome = $request->get("nome");
			$cliente->email = $request->get("email");
			$cliente->cpf = $request->get("cpf");
			$cliente->telefone = $request->get("telefone");
			$cliente->data_nascimento = $request->get("data_nascimento");
			$cliente->save();
			return redirect("/cliente");
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::Find($id);
		return response()->json([
			"nome" => $cliente->nome,
			"telefone"=>$cliente->telefone,
			"cpf"=>$cliente->cpf
		]);
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
		$clientes = Clientes::All();
		$cliente = Clientes::Find($id);
		return view(
			"cliente.index", 
			[
				"clientes" => $clientes,
				"cliente" => $cliente
			]
		);
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
		Clientes::Destroy($id);
        return redirect("/cliente");//retornar a pagina cliente
    }
}
