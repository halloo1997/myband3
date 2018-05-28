<?php

function homepage_action($smarty) {
    $mailadresses = get_mailadresses();
    $smarty->assign('mailadresses',$mailadresses );
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action($smarty){
    $smarty->display('notfound.tpl');

}