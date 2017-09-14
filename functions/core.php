<?php





function remove_empty_p($content){
    $content = force_balance_tags($content);
    $content = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content);
    echo $content;
}


?>