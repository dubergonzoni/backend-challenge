<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoCriado; // Supondo que você tenha uma classe de Mail para pedidos

class ClienteController extends Controller
{
    // Método para exibir a lista de clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Método para mostrar um formulário de criação de cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Método para armazenar um novo cliente
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'required',
            'data_nascimento' => 'nullable|date',
            'endereco' => 'required',
            'complemento' => 'nullable',
            'bairro' => 'required',
            'cep' => 'required',
        ]);

        $cliente = Cliente::create($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso.');
    }

    // Método para mostrar o formulário de edição de um cliente
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // Método para atualizar um cliente
    public function update(Request $request, Cliente $cliente)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefone' => 'required',
            'data_nascimento' => 'nullable|date',
            'endereco' => 'required',
            'complemento' => 'nullable',
            'bairro' => 'required',
            'cep' => 'required',
        ]);

        $cliente->update($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    // Método para deletar um cliente
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso.');
    }
}
