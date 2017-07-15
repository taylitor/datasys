<?php

$themeurl = get_template_directory_uri();
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'marca-pais') !== false) {
    get_template_part('marcapais');

} elseif (strpos($url,'quienes-somos') !== false) {
    get_template_part('quienessomos');

} elseif (strpos($url,'valores') !== false) {
    get_template_part('valores');

}
else{
    get_template_part('defaultus');
}


?>
 