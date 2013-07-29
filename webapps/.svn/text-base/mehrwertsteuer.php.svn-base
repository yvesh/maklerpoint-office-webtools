<?php
/*
 *  Program:    Mehrwertsteuer webapp
 *  Language:   PHP
 *  Date:       2010/10/02 10:20
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

$netto = "";
$brutto = "";
$mwst = "";

$layout = "default";

if(isset($_GET["layout"]))
    $layout = htmlspecialchars($_GET["layout"]);


if($_POST) {
    $netto = htmlspecialchars(strtr($_POST['netto'], ',', '.'));
    $brutto = htmlspecialchars(strtr($_POST['brutto'], ',', '.'));
    $mwst = htmlspecialchars(strtr($_POST['mwst'], ',', '.'));

    $mwstsatz = $_POST['Zahlmethode'];

//    if(!is_numeric($netto) || !is_numeric($brutto) || !is_numeric($mwst))
//        die("Keine gültige Zahl");
    // brutto = netto * mwst
    // mwst = 100 / mwstsatz * $mwst
    // netto =

    if(is_numeric($netto)) {
        $mwst = number_format(($netto * ($mwstsatz / 100)), 2);
        $brutto = number_format(($netto * ($mwstsatz / 100 + 1)), 2);
    } else if (is_numeric($mwst)) {
        $netto = number_format(((100 / $mwstsatz) * $mwst), 2);
        $brutto = number_format(($netto + $mwst), 2);
    } else if (is_numeric($brutto)) {
//        $netto = number_format((), 2);
        $netto = number_format(($brutto / ($mwstsatz / 100 + 1)), 2);
        $mwst = number_format(($netto * ($mwstsatz / 100)), 2);
    } else {
        //TODo
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Mehrwehrtsteuer Rechner" />
    <meta name="title" content="Mehrwertsteuer Rechner" />
    <meta name="author" content="MaklerPoint Software (www.maklerpoint.de)" />
    <meta name="description" content="http://www.maklerpoint.de">
    <meta name="generator" content="MaklerPoint Software" />
    <title>MaklerPoint Software | Mehrwertsteuer Rechner</title>

    <link rel="stylesheet" href="css/default.css" type="text/css" />
</head>
<body>
    <?php if ($layout == "modern") { echo "<div id=\"mw-modern\">"; } ?>
    <!-- Mehrwertsteuer Rechner (C) 2010 MaklerPoint Software -->
    <form name="mwst" method="post" action="mehrwertsteuer.php">
        <table width="95%" cellspacing="0" cellpadding="4" boder="0">
            <tr>
                <td><input class="inputbox" size="7" style="width: 67px;" name="netto" onClick="document.mwst.netto.value='';document.mwst.mwst.value='';document.mwst.brutto.value='';" value="<?php echo $netto; ?>"> +</td>
                <td><input class="inputbox" size="7" style="width: 67px;" name="mwst" onClick="document.mwst.netto.value='';document.mwst.mwst.value='';document.mwst.brutto.value='';" value="<?php echo $mwst; ?>"> =</td>
                <td><input class="inputbox" size="7" style="width: 67px;" name="brutto" onClick="document.mwst.netto.value='';document.mwst.mwst.value='';document.mwst.brutto.value='';" value="<?php echo $brutto; ?>"></td>
            </tr>
            <tr>
                <td>Netto</td>
                <td>MwSt.</td>
                <td>Brutto</td>
            </tr>
            <tr>
                <td colspan="3">Steuersatz:</td>
            </tr>
            <tr>
                <td colspan="3">
                <input type="radio" name="Zahlmethode" value="7"> 7 %
                <input type="radio" name="Zahlmethode" value="19" checked> 19 %
                </td>
            </tr>
            <tr style="padding-top: 10px;">
                <td colspan="3" align="right"><input type="submit" value="Berechnen" name="berechnen"></td>
            </tr>
        </table>
    </form>
    <div id="poweredby">
        Powerd by <a href="http://www.maklerpoint.de" title="Software und Dienstleistungen
                     für die Finanz- und Versicherungsbranche">MaklerPoint Software</a>
    </div>
    <?php if ($layout == "modern") { echo "</div>"; } ?>
</body>
</html>