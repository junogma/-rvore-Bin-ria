<?php
class arvore {

    public $vl;
    public $esq;
    public $dir;
    public function construct ($vl = '')
    {
        if ( $vl != ' ' && !is_null($vl) ) {
            $this->vl = $vl;
        }
    }
}
class funcao
{
    public function inserir($node, $vl)
    {
                if ($node->dir == NULL)
                {
                    echo "Inserindo Usuário 2 (com " . $vl . " pontos) a esquerda de Usuário 1!<br>";
                    $node->dir = new arvore($vl);
                }else {
                    echo "Inserindo Usuário 3 (com " . $vl . " pontos) a direita de Usuário 2 !<br>";
                    $node->esq = new arvore($vl);
                }
            }
    }
?>
