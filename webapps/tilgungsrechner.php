<?php
/*
 *  Program:    Tilgungsrechner webapp
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
// $darlehn = "10000,00";
// $zinsatz = "5,30";
// $tilgung = "4,70";
// $sondertilgung = "1000,00";

  $darlehn = "120000,00";
 $zinsatz = "3,60";
 $tilgung = "3,00";
 $sondertilgung = "3000,00";

 if ($_POST) {
     $darlehn = htmlspecialchars(strtr($_POST['darlehnbetrag'], ',', '.'));
     $zinsatz = htmlspecialchars(strtr($_POST['zinssatz'], ',', '.'));
     $tilgung = htmlspecialchars(strtr($_POST['tilgungprozent'], ',', '.'));
     $sondertilgung = htmlspecialchars(strtr($_POST['sondertilgung'], ',', '.'));

     if(!is_numeric($darlehn) || !is_numeric($zinsatz) || !is_numeric($tilgung) || !is_numeric($sondertilgung))
         die("Keine gültige Zahl");

 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Tilgungrechner" />
    <meta name="title" content="Tilgungsrechner" />
    <meta name="author" content="MaklerPoint Software (www.maklerpoint.de)" />
    <meta name="description" content="http://www.maklerpoint.de">
    <meta name="generator" content="MaklerPoint Software" />
    <title>MaklerPoint Software | Tilgungsrechner</title>

    <link rel="stylesheet" href="css/default.css" type="text/css" />
</head>
<body>
    <!-- Tilgungsrechner (C) 2010 MaklerPoint Software -->
    <form method="post" action="tilgungsrechner.php">
    <table width="100%" cellspacing="0" cellpadding="4" boder="0">
        <tr>
            <td width="40%" align="right">Darlehensbetrag: </td>
            <td width="60%" align="left"><input class="inputbox" size="12" name="darlehnbetrag" value="<?php echo $darlehn; ?>" style="text-align: right;"> &euro;</td>
        </tr>
        <tr>
            <td width="40%" align="right">Zinssatz (nominal): </td>
            <td width="60%" align="left"><input class="inputbox" size="12" name="zinssatz" value="<?php echo $zinsatz; ?>" style="text-align: right;"> %</td>
        </tr>
        <tr>
            <td width="40%" align="right">Tilgungssatz (in Prozent): </td>
            <td width="60%" align="left"><input class="inputbox" size="12" name="tilgungprozent" value="<?php echo $tilgung; ?>" style="text-align: right;"> %</td>
        </tr>
        <tr>
            <td width="40%" align="right">Sondertilgung: </td>
            <td width="60%" align="left"><input class="inputbox" size="12" name="sondertilgung" value="<?php echo $sondertilgung; ?>" style="text-align: right;"> &euro;</td>
        </tr>
        <tr style="padding-top: 10px;">
            <td colspan="2" align="center"><input type="submit" value="Berechnen" name="berechnen"></td>
        </tr>
    </table>
    <?php
        if($_POST) {
            $tk = $sondertilgung / $darlehn;
//            echo $tk;
            $mrate = round((($darlehn * (($zinsatz + $tilgung) / 100)) / 12), 2);
            $mratereal = round((($darlehn * (($zinsatz + $tilgung) / 100 + $tk)) / 12), 2);
//            echo "<br />" . $mratereal;
            $mjahre = (log(1+ (($zinsatz /100) / ($tilgung / 100 + $tk)))) / (log(1 + ($zinsatz / 100)));
            $laufzeit = round($mjahre, 0);
            $zinsen = strtr(number_format((($laufzeit * ($mratereal * 12)) - $darlehn), 2), ",.", ".,");
            $gesamt = strtr(number_format(($darlehn + $zinsen), 2), ",.", ".,");
    ?>
        <table width="100%" cellspacing="0" cellpadding="4" boder="0">
            <tr>
                <td colspan="2" align="left"><strong>Ergebnis:</strong></td>
            </tr>
            <tr>
                <td width="40%" align="right">Monatliche Rate: </td>
                <td width="60%" align="left"><?php echo $mrate; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Gesamtlaufzeit: </td>
                <td width="60%" align="left"><?php echo $laufzeit; ?> Jahre</td>
            </tr>
            <tr>
                <td width="40%" align="right">Zinskosten: </td>
                <td width="60%" align="left"><?php echo $zinsen; ?> &euro;</td>
            </tr>
            <tr>
                <td width="40%" align="right">Gesamtsumme der Finanzierung: </td>
                <td width="60%" align="left"><?php echo $gesamt; ?> &euro;</td>
            </tr>
        </table>
    <?php
        }
    ?>
    <div id="poweredby">
        Powerd by <a href="http://www.maklerpoint.de" title="Software und Dienstleistungen
                     für die Finanz- und Versicherungsbranche">MaklerPoint Software</a>
    </div>
    </form>
</body>
</html>