<?php
class ReceitaController{

    public function all(){        
        
        // INSTANCIANDO O OBJETO usuario DA CLASSE Usuario
        $objeto = new receita();

        // RECUPERAR OS REGISTROS DO BANCO DE DADOS
        $receita = $objeto->all();

        // RECUPERANDO O VALORES DOS ATRIBUTOS E MOSTRANDO NA TELA
        include "view/usuarios.php";

    }

}