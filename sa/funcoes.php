<?php

function alertErro($msg)
{
    echo '<div class="alert alert-danger text-center" role="alert">';
    echo $msg;
    echo '</div>';
}
function alertSucesso($msg)
{
    echo '<div class="alert alert-success text-center" role="alert">';
    echo $msg;
    echo '</div>';
}

?>