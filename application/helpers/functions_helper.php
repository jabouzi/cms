<?php

function isAjax()
{
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
}

function get_redirect_url()
{
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
    $host     = $_SERVER['HTTP_HOST'];
    $params   = $_SERVER['REQUEST_URI'];
    $currentUrl = $protocol . '://' . $host . $params;    
    $redirect_url = explode(base_url(),$currentUrl);
    
    return $redirect_url;
}

function send_post_data($url,$data)
{
    require_once 'HTTP/Request2.php';
    $request = new HTTP_Request2($url);
    $request->setMethod(HTTP_Request2::METHOD_POST)->addPostParameter($data);
    return $request->send();
}

function set_active_menu($active)
{
    $menu = array();
    for($i = 0; $i <= 5; $i++)
    {
        $menu[$i] = '';
    }
    $menu[$active] = 'active';
    return $menu;
}
