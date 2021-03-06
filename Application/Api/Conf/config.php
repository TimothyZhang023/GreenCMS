<?php
/**
 * Created by GreenStudio GCS Dev Team.
 * File: config.php
 * User: Timothy Zhang
 * Date: 14-4-22
 * Time: 下午5:57
 */

return array(

     'SHOW_PAGE_TRACE' => get_opinion('SHOW_PAGE_TRACE', false, false),
    'SHOW_CHROME_TRACE' => get_opinion('SHOW_CHROME_TRACE', false, false),


    'COOKIE_PREFIX' => get_opinion('COOKIE_PREFIX', false, 'greencms_'),
    'COOKIE_EXPIRE' => get_opinion('COOKIE_EXPIRE', false, 3600),
    'COOKIE_DOMAIN' => get_opinion('COOKIE_DOMAIN', false),
    'COOKIE_PATH' => get_opinion('COOKIE_PATH', false),


    'LOG_RECORD' => get_opinion('LOG_RECORD', false),
    'LOG_LEVEL' => get_opinion('LOG_LEVEL', false, ''),


    'URL_MODEL' => 0,


);