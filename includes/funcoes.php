<?php 
function cursos(){
    require_once 'cadastro.php';
    $busca = $cd->query('select * from cursos');
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<tr><td>$reg->nomecurso</td><td>$reg->descricao</td><td>$reg->carga</td><td>$reg->totaulas</td><td>$reg->ano</td></tr>";
            }
        }
    }
}

function gafanhotos(){
    require_once 'cadastro.php';
    $busca = $cd->query('select * from gafanhotos as g join cursos as c on g.cursoprefetido = c.idcurso');
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<tr><td>$reg->nome</td><td>$reg->profissao</td><td>$reg->nascimento</td><td>$reg->sexo</td><td>$reg->peso</td><td>$reg->altura</td><td>$reg->nacionalidade</td><td>$reg->nomecurso</td></tr>";
            }
        }
    }
}
?>