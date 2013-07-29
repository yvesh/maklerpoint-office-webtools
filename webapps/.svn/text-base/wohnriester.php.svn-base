<?php
/*
 *  Program:    Wohnriester webapp
 *  Language:   PHP
 *  Date:       2010/10/05 10:20
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

 $einkommen = "40000,00";
 $verheiratet = false;
 $kindervor = 0;
 $kindernach = 0;

 if($_POST) {
    $einkommen = htmlspecialchars(strtr($_POST['einkommen'], ',', '.'));
    $verheiratet = $_POST['verheiratet'];
    $kindervor = htmlspecialchars($_POST['kindervor']);
    $kindernach = htmlspecialchars($_POST['kindernach']);
 }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Wohnriester Rechner, Wohnriester" />
    <meta name="title" content="Wohnriester Rechner" />
    <meta name="author" content="MaklerPoint Software (www.maklerpoint.de)" />
    <meta name="description" content="http://www.maklerpoint.de">
    <meta name="generator" content="MaklerPoint Software" />
    <title>MaklerPoint Software | Wohnriester Rechner</title>

    <link rel="stylesheet" href="css/default.css" type="text/css" />
</head>
<body>   
    <!-- Wohnriester Rechner (C) 2010 MaklerPoint Software -->
    <form name="tilgung" method="post" action="wohnriester.php">

    </form>
    <div id="poweredby">
        Powerd by <a href="http://www.maklerpoint.de" title="Software und Dienstleistungen
                     für die Finanz- und Versicherungsbranche">MaklerPoint Software</a>
    </div>
    <?php
    if($_POST) {
        
        $grundzulage = 154;
        $vzulage = 0;
        $kuzulage = 185 * $kindervor;
        $knzulage = 300 * $kindernach;

        $betrag = $einkommen * 0.04;

        if($verheiratet == true)
            $vzulage = 154;

        $zulage = $grundzulage + $vzulage + $kuzulage + $knzulage;

        $eigenanteil = $betrag - $zulage;
        $steuerent = 23;
        $quote = 23;
    ?>
    <table width="100%" cellspacing="0" cellpadding="4" boder="0">
            <tr>
                <td colspan="2" align="left"><strong>Ergebnis:</strong></td>
            </tr>
            <tr>
                <td width="40%" align="right">J&auml;hrlicher Vorsorgebetrag: </td>
                <td width="60%" align="left"><?php echo $betrag; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Eigenanteil: </td>
                <td width="60%" align="left"><?php echo $eigenanteil; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Riester Zulage: </td>
                <td width="60%" align="left"><?php echo $zulage; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Steuerliche Entlastung: </td>
                <td width="60%" align="left"><?php echo $steuerent; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Riester F&ouml;rderquote: </td>
                <td width="60%" align="left"><?php echo $quote; ?> %</td>
            </tr>
      </table>
    <?php
    }
    ?>
</body>
</html>