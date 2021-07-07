<?php
use App\Core\Controller;

class Produtos extends Controller{
    public function index(){

        $produtoModel = $this->model("Produto");

        $dados = $produtoModel->listarTodos();

        $this->view("produtos/index", $dados);
    }
}