<?php

namespace App\Http\Controllers;

use App\Models\segunda;
use App\Responses\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SegundaControlle extends Controller
{
    public function salvar(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:15',
            'ano'=> 'required|integer',
            'nome'=> 'required|string|max:200',
            'preço'=> 'required|string',

        ]);
    
        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), 'Validation error');
        }
    
        $customer = segunda::create($request->all());
        return ApiResponse::ok('segunda salvo com sucesso', $customer);
       
    }

  

    public function excluir(int $id)
    {
        $customer = segunda::findOrFail($id);
        $customer->delete();  
        return ApiResponse::ok('segunda removido com sucesso');      
    }

    public function editar(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:15',
            'ano'=> 'required|integer',
        ]);
    
        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), 'Validation error');
        }
        $customer = segunda::findOrFail($id);
        $customer->update($request->all());
        return ApiResponse::ok('Segunda atualizado com sucesso', $customer); 
    }  

    public function listar()
    {
        $customers = segunda::all();
        return ApiResponse::ok('Lista de Segunda', $customers);    
    }

    public function listarPeloID(int $id)
    {
        $customer = segunda::findOrFail($id);
        return ApiResponse::ok('segunda a ser listado.', $customer);  
    } 
}

