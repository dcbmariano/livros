<?php

namespace App\Controllers;
use App\Models\LivrosModel;
use CodeIgniter\I18n\Time;

class Livros extends BaseController
{
    public function listar(): string
    {
        $data = []; // crie um array vazio
        //$data['livros'] = ["Harry Potter", "Senhos dos Anéis", "Crônicas de Nárnia"];

        $livrosModel = new LivrosModel();
        $data['livros'] = $livrosModel->findAll();
        // dd($data['livros']);
        
        return view('livros', $data); // chame a view que irá exibir isto
    }

    public function inserir_teste()
    {
        //exit(); // este comando só deve ser executado uma vez
        $livrosModel = new LivrosModel();
        $agora = new Time('now');

        $livrosModel->save([
            'titulo'=>'Teste',
            'autor'=>'Autor Teste',
            'created_at'=>$agora,
            'updated_at'=>$agora
        ]);

        print_r($livrosModel->findAll());
    }

    public function deletar($id){
        /* Remove um livro com base no ID fornecido */

        $livrosModel = new LivrosModel();
        $livrosModel->delete(['id' => $id]);

        $data = []; // crie um array vazio
        $data['deletado'] = $id;

        return redirect('livros')->with('mensagem', "Livro $id deletado com sucesso"); 
    }


}
