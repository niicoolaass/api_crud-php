<?php
      // Arquivo de "Regras de negócio": 
      // MODELO -> Operações para ter acesso ao BD e realizar CRUD !!

     /* criarmos uma classe para ter acesso ao BD e criarmos dois métodos  de consulta:
       1) consultar um determinado o registro através de um parâmetro "id"   */    
      
      //inserir o arquivo 'config.php'
      require_once 'config.php' ; // ou include 'config.php'
      
      /* Criamos uma class chama "Alunos"  */
      class Alunos 
      {
        //1) um método para fazer consulta atráves do parâmetro $id
        public static function select(int $id)
        {
            //Criar duas variáveis para tabela e primeira coluna
            $tabela = "alunos"; //variável para nome da tabela

            $coluna = "codigo"; //variável para chave primaria       

            // Conectando com o banco de dados através da classe (objeto) PDO
            // pegando as informações do config.php (variáveis globais)

            $connPdo = new PDO(dbDrive.':host='.dbHost.'; dbname='.dbName, dbUser, dbPass);            
            // Usando comando sql que será executado no banco de dados para consultar um 
            // determinado registro 
            $sql = "select * from $tabela where $coluna = :id" ;   

            //preparando o comando Select do SQL para ser executado usando método prepare()
            $stmt = $connPdo->prepare($sql); 

            //configurando (ou mapear) o parametro de busca
            $stmt->bindValue(':id' , $id) ; 

            // Executando o comando select do SQL no banco de dados
            $stmt->execute() ;   

            if ($stmt->rowCount() > 0){// se houve retorno de dados (Registros)    
                // retornando os dados do banco de dados através do método fetch(...)
                return $stmt->fetch(PDO::FETCH_ASSOC) ;   
                             
            }else{// se não houve retorno de dados, jogar no classe Exception (erro)
                  // e mostrar a mensagem "Sem registro do aluno"                
                throw new Exception("Sem registro do aluno");
            }
        }        
      }