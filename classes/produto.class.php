<?php


class Produto{

    private $id;
    private $nome;
    private $descricao;
    private $preco;
    

    function __construct($id=NULL, $nome="", $descricao="", $preco=""){
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        
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


    static function get_produtos(){
        $objConexao = new ConexaoBD();
        
        $link = $objConexao->get_link();

        $sql = "SELECT id, nome, descricao, preco FROM produto";

        $vProdutos = array();

        if( $stmt = $link->prepare($sql) ){

            $stmt->execute();

            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('nome', $nome);
            $stmt->bindColumn('descricao', $descricao);
            $stmt->bindColumn('preco', $preco);
        

            while( $stmt->fetch(PDO::FETCH_BOUND) ){

                $objProduto = new Produto(
                    $id,
                    $nome,
                    $descricao,
                    $preco,
                    
                );

                $vProdutos[] = $objProduto;

            }

            
            $stmt->closeCursor();
        }

        return $vProdutos;
    }

    function salvar(){
        $objConexao = new ConexaoBD();
                
            $link = $objConexao->get_link();

                if($this->id === NULL){
                    $sql = "INSERT INTO 
                        produto (nome, descricao, preco) 
                        VALUES (:nome,:descricao,:preco)";

                    if( $stmt = $link->prepare($sql) ){
                        
                        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
                        $stmt->bindParam(":preco", $this->preco, PDO::PARAM_STR);
                        

                        $stmt->execute();
                        
                        $stmt->closeCursor();

                        $this->id = $link->lastInsertId();

                        return TRUE;
                    }
                }
                else{
                    $sql = "UPDATE produto SET 
                            nome=:nome,
                            descricao=:descricao,
                            preco=:preco,
                            WHERE id = :id";

                    if( $stmt = $link->prepare($sql) ){
                                        
                        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
                        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
                        $stmt->bindParam(":preco", $this->preco, PDO::PARAM_STR);

                        $stmt->execute();
                        
                        $stmt->closeCursor();

                        return TRUE;
                    }

                }
            
            return FALSE;
        }

    }

    


?>