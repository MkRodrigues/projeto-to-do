<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller{
    public function index(){
        //O método with retorna uma chave que pode ser acessada na view para inclusão de dados, o método all retorna todas as variáveis da classe.
        return view('index')->with('todos', Todo::all());
    }

    public function show($todoId){
        // Retorna o método find que procura todos os dados com base no id passado em parâmetro
        return view('show')->with('todo', Todo::find($todoId));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        // Retorna uma requisição com todos os dados inseridos nos campos
        $data = request()->all();

        // Nova instância da classe Todo
        $todo = new Todo();

        // Passa as informações obtidas nos campos para a varável $data inserindo-as no vetor
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        // Salva as informações inseridas no vetor no banco
        $todo->save();

        // Redireciona para a página principal
        return redirect('/todos');
    }

    public function destroy($todoId){
        // Encontra o dado via get pelo comando find
        $todo = Todo::find($todoId);

        // Exclui o dado retornado via get com o comando delete
        $todo->delete();
        return redirect('/todos');
    }

    public function showUpdate($todoId){
        return view('showUpdate')->with('todos', Todo::find($todoId));
    }

    public function update($todoId){
        $data = request()->all();
        $todo = Todo::find($todoId);

        // Atualiza os novos dados dos campos recebidos via post e atualiza com a função update
        $todo->update($data);
        return redirect('/todos');
    }

}
