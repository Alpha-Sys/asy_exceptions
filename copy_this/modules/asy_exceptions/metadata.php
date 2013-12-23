<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2013
 * @module      asy_exceptions
 * @oxidversion OXID eShop CE
 * @version     01.08.2013  1.0
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_exceptions',
    'title'        => 'Exceptions-Benachrichtigung',
    'description'  => array(
        'de' => 'Verschickt beim Auftreten einer Exception den Fehlertext per Email an eine konfigurierte Email-Adresse',
        'en' => 'Sends email with log message to recipient',
    ),
    'version'      => '1.1',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'thumbnail'    => 'module_logo.png',
    'extend'       => array(
        'oxemail' => 'asy_exceptions/core/asy_exceptions__oxemail',
        'oxutils' => 'asy_exceptions/core/asy_exceptions__oxutils',
    ),
    'settings'     => array(
        array('group' => 'asy_exception_settings', 'name' => 'sExceptionEmail', 'type' => 'str',  'value' => ''),
    )
);
