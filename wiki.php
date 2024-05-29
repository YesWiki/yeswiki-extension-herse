<?php
if (!empty($wakkaConfig['herse_id']) && !empty($wakkaConfig['herse_password'])) {
    if (
        !isset($_SERVER['PHP_AUTH_USER'])
        || !isset($_SERVER['PHP_AUTH_PW'])
        || $_SERVER['PHP_AUTH_USER'] != $wakkaConfig['herse_id']
        || $_SERVER['PHP_AUTH_PW'] != $wakkaConfig['herse_password']
    ) {
        header('WWW-Authenticate: Basic realm="' . $wakkaConfig['wakka_name'] . '"');
        header('HTTP/1.0 401 Unauthorized');
        // manually include lang file because it's not loaded for now
        $langFile = 'tools/herse/lang/herse_' . $GLOBALS['prefered_language'] . '.inc.php';
        $lang = file_exists($langFile) ? include_once($langFile) : include_once('tools/herse/lang/herse_en.inc.php');
        $GLOBALS['translations'] = array_merge($GLOBALS['translations'], $lang);
        echo _t('ACCESS_DENIED');
        exit;
    }
}
