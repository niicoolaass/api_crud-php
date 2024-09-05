<?php
//Este arquivo : arquivo de controle -> tipo de serviços
  include 'Alunos.php';
  class AlunosService{
      //Um método (serviço) para consulta de dados
      public function get($id = null){
        if ($id){//se existe id, chama a operação: select($id)
            return Alunos::select($id);
        }
        else{// se não existe id, chame a operação: selectAll()
            return Alunos::selectAll();
        }
      }
  }

?>