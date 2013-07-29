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

    /**
     * Configuration
     */
    $currentversion = "1.0.1.06";
    $currentfile = "http://www.maklerpoint.de/appcon/mp-bp/update/files/mp_bp-021110-b231.zip";
    $filesize = "6,03 MB";
    $filemd5 = "21346541215164643213";

    /* Start CODE */

    error_reporting(E_WARNING);
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

    $ip = htmlspecialchars($_SERVER["REMOTE_ADDR"]);
    $hostaddress = htmlspecialchars(gethostbyaddr($ip));
    $userAgent = htmlspecialchars($_SERVER["HTTP_USER_AGENT"]);
    $referred = htmlspecialchars($_SERVER['HTTP_REFERER']);

    $db = new mysqli('localhost', 'mp-app', 'n1w4L1r3m', 'mp_app');
    if (mysqli_connect_errno()) {
        die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
    }

   $sql = "INSERT INTO updatecheck_bp (version, build, serialhash, os, osname, osarch, osversion, vmvendor," .
          "vmversion, username, userdir, ip, hostaddress, useragent, referred) VALUES (" .
          "'". $version ."', '". $build ."', '". $serialhash ."', '". $os ."', '". $osname ."', '". $osarch .
          "' , '". $osversion ."' , '". $vmvendor ."', '". $vmversion ."', '". $username ."', '". $userdir .
          "', '". $ip ."', '". $hostaddress ."', '". $userAgent ."', '". $referred ."')";

//           echo $sql;

   $stmt = $db->prepare($sql);

   if (!$stmt) {
       die ('Es konnte kein SQL-Query vorbereitet werden: '.$db->error);
   }

   if (!$stmt->execute()) {
      die ('Query konnte nicht ausgeführt werden: '.$stmt->error);
   }

   if($version != $currentversion) {
       echo "update=true\n";
       echo "currentversion=" . $currentversion ."\n";
       echo "changelog=http://www.maklerpoint.de/appcon/mp-bp/update/changelog-current.txt\n";
       echo "filepath=". $currentfile . "\n"; // depending on os?
       echo "size=" . $filesize . "\n";
       echo "md5=" . $filemd5;
   } else {
       echo "update=false";
   }
?>