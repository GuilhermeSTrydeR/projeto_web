<?php


class Servico{

    private $id;
    private $nome;
    private $descricao;
    private $previsao;
    private $finalizado;
    

    function __construct($id=NULL, $nome="", $descricao="", $previsao="", $finalizado){
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->previsao = $previsao;
        $this->finalizado = $finalizado;
        
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __toString(){
        return $this->nome . " (" . $this->id . ")";
    }


    static function get_servicos(){
        $objConexao = new ConexaoBD();
        
        $link = $objConexao->get_link();

        $sql = "SELECT id, nome, descricao, previsao, finalizado FROM servico";

        $vServicos = array();

        if( $stmt = $link->prepare($sql) ){

            $stmt->execute();

            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('nome', $nome);
            $stmt->bindColumn('descricao', $descricao);
            $stmt->bindColumn('previsao', $previsao);
            $stmt->bindColumn('finalizado', $finalizado);
        

            while( $stmt->fetch(PDO::FETCH_BOUND) ){

                $objServico = new Servico(
                    $id,
                    $nome,
                    $descricao,
                    $previsao,
                    $finalizado,
                    
                );

                $vServicos[] = $objServico;

            }

            
            $stmt->closeCursor();
        }

        return $vServicos;
    }

    function salvar(){
        $objConexao = new ConexaoBD();
                
            $link = $objConexao->get_link();

                if($this->id === NULL){
                    $sql = "INSERT INTO 
                        servico (nome, descricao, previsao, finalizado) 
                        VALUES (:nome,:descricao,:previsao,:finalizado)";

                    if( $stmt = $link->prepare($sql) ){
                        
                        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
                        $stmt->bindParam(":previsao", $this->previsao, PDO::PARAM_STR);
                        $stmt->bindParam(":finalizado", $this->finalizado, PDO::PARAM_STR);

                        $stmt->execute();
                        
                        $stmt->closeCursor();

                        $this->id = $link->lastInsertId();

                        return TRUE;
                    }
                }
                else{
                    $sql = "UPDATE servico SET 
                            nome=:nome,
                            descricao=:descricao,
                            previsao=:previsao,
                            finalizado=:finalizado
                            WHERE id = :id";

                    if( $stmt = $link->prepare($sql) ){
                                        
                        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
                        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
                        $stmt->bindParam(":previsao", $this->previsao, PDO::PARAM_STR);
                        $stmt->bindParam(":finalizado", $this->finalizado, PDO::PARAM_STR);

                        $stmt->execute();
                        
                        $stmt->closeCursor();

                        return TRUE;
                    }

                }
            
            return FALSE;
        }

    }

    


?>