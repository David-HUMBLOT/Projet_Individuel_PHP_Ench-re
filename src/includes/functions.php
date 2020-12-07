<?php 
// avec le ! sert a voir si la fonction existe deja pour evité de la redéclarer une seconde fois
if(!function_exists('identification')){
    function identification()
{
    $idEnchere = md5(uniqid(rand(), true));
    $_POST['id'] = $idEnchere;
};
};
?>


