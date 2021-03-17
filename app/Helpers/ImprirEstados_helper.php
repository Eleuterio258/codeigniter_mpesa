<?php
function estado($datas)
{
    if ($datas == 0) {
        return 'inativo';
    } else if ($datas == 2) {
        return  'ativo';
    } else if ($datas == 3) {
        return  'banido';
    } else if ($datas == 4) {
        return  'Proibido';
    }
}

?>
