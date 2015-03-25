<?php
if(
    isset($_COOKIE['zymiausifotografai']) ||
    isset($_GET['zymiausifotografai']) ||
    isset($_GET['zfotografas']) ||
    isset($_GET['zoperatorius']) ||
    isset($_GET['zfotografasoperatorius']) ||

    isset($_GET['famousphotographers']) ||
    isset($_GET['fphotographer']) ||
    isset($_GET['fcameraman']) ||
    isset($_GET['fphotographercameraman'])
) {
    if(!isset($_COOKIE['zymiausifotografai']))
    {
        $cookieName = "zymiausifotografai";
        $cookieValue = time();
        setcookie($cookieName, $cookieValue, time() + (86400 * 90), "/");
    }
} else
{
    // YOUR CURRENT REGISTER POPUP-CODE
}
?>