<?php
/*
 *  Program:    MaklerPoint System
 *  Module:     Website PHP Application Helpers
 *  Language:   PHP
 *  Date:       2011/01/09 12:20
 *  Web:        http://www.maklerpoint.de
 *  Version:    1.0.1
 *
 *  Copyright (C) 2010 Yves Hoppe.  All Rights Reserved.
 *  See License.txt or http://www.maklerpoint.de/copyright for details.
 *
 *  This software is distributed WITHOUT ANY WARRANTY; without even the
 *  implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See
 *  above copyright notices for details.
 */

error_reporting(E_WARNING);

    $link = mysql_connect('localhost', 'mp-app', 'n1w4L1r3m', 'mp_app')
                OR die(mysql_error);

    // BASIC DATA
    $version = htmlspecialchars($_POST["clientVersion"]);
    $build = htmlspecialchars($_POST["clientBuild"]);

    $serialhash = htmlspecialchars($_POST["clientSerial"]);
    $os = htmlspecialchars($_POST["clientOS"]);
    $osname = htmlspecialchars($_POST["clientOSName"]);
    $osarch = htmlspecialchars($_POST["clientOSArch"]);
    $osversion = htmlspecialchars($_POST["clientOSVersion"]);

    $vmvendor = htmlspecialchars($_POST["clientVMVendor"]);
    $vmversion = htmlspecialchars($_POST["clientVMVersion"]);

    $username = htmlspecialchars($_POST["clientUsername"]);
    $userdir = htmlspecialchars($_POST["clientUserdir"]);

    $environment = htmlspecialchars($_POST["clientEnvironment"]);

    $databaselog = htmlspecialchars($_POST['databaseLog']);
    $log = htmlspecialchars($_POST['defaultLog']);
    $pluginlog = htmlspecialchars($_POST['pluginLog']);

    // REMOTE DATA
    $ip = htmlspecialchars($_SERVER["REMOTE_ADDR"]);
    $hostaddress = htmlspecialchars(gethostbyaddr($ip));
    $userAgent = htmlspecialchars($_SERVER["HTTP_USER_AGENT"]);
    $referred = htmlspecialchars($_SERVER['HTTP_REFERER']);


    $db = new mysqli('localhost', 'mp-app', 'n1w4L1r3m', 'mp_app');
    if (mysqli_connect_errno()) {
        die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
    }

    $sql = "INSERT INTO uploadlog_web (version, build, serialhash, os, osname, osarch, osversion, vmvendor," .
          "vmversion, username, userdir, ip, hostaddress, useragent, referred, environment, databaselog, log, pluginlog) VALUES (" .
          "'". $version ."', '". $build ."', '". $serialhash ."', '". $os ."', '". $osname ."', '". $osarch .
          "' , '". $osversion ."' , '". $vmvendor ."', '". $vmversion ."', '". $username ."', '". $userdir .
          "', '". $ip ."', '". $hostaddress ."', '". $userAgent ."', '". $referred ."', '". $environment ."'
            , '". mysql_real_escape_string($databaselog) ."', '". mysql_real_escape_string($log) ."', '". mysql_real_escape_string($pluginlog) ."')";

    $stmt = $db->prepare($sql);

    if (!$stmt) {
       die ('Es konnte kein SQL-Query vorbereitet werden: '.$db->error);
    }

    if (!$stmt->execute()) {
      die ('Query konnte nicht ausgeführt werden: '.$stmt->error);
    }

    echo "success";

?>
