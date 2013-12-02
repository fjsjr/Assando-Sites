<?php
class Inscricao extends AppModel {
# public $useTable = 'inscricoes';
public $primaryKey = 'id';
public $displayField = 'Nome';
public $order = array('nome' => 'ASC');
public $validate = 'true';
public $virtualFields = array(
    'name' => "CONCAT(Incricoes.nome, ' ', Incricoes.sobrenome)"
);
}

?>