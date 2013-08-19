
    <body onload="document.ergebnis.ergebnis.focus()">
<?    
    if($_GET['versuche']==20){
    echo "Herzlichen Gl&uumlckwunsch!<br>Von deine 20 L&oumlsungen waren ".$_GET['richtige']." richtig!";
    echo '<br><br><a href="/einmaleins.php" >Hier gehts von vorne los!</a>';
    die;
    }
    if(!isset($_GET['versuche'])){
        echo "<h1>Das kleinekind einmaleins.</h1> <br> Es gibt 20 aufgaben! Viel Gl&uumlck!";
        echo '<br><a href="/einmaleins.php?versuche=0">Hier gehts LOS!</a>';
        die;
    }
    echo"Einmaleins<br>";
    $richtige=$_GET['richtige'];
    $versuche=isset($_GET['versuche'])?$_GET['versuche']:1;
    $zeitInSek = time() - $_GET['time'];
    
    if(isset($_GET['richtigesergebnis'])){
        if($_GET['richtigesergebnis']==$_GET['ergebnis'])
        {
            //echo"<h1>YUHUUUUU!</h1> L&oumlsung korrekt!<br><br>";
            //echo " <br> Zeitgebraucht:".$zeitInSek." sek. <br>";
            if($zeitInSek < 10){
                
                $richtige++;
                //echo" RICHTIG <br>";
            }
            else {
                //echo"<br> Richtig aber zu langsam! <br>";
            }
                $versuche++;
            
        }
        else {
            //echo"<br>Richig wäre ".$_GET['ergebnis']." gewesen<br>";
            $versuche++;
        }
    }
    echo "Aufgabe ".$versuche." von 20<br>";
    $zufall = rand(1,10);
    $zufall2 = rand(1,10);
    $ZufallRechenArtInZahl = rand(1,4);
    switch ($ZufallRechenArtInZahl){
        case 1:
            $zufall3=$zufall+$zufall2;
            echo $zufall." + ".$zufall2." = ?";
            echo '<form name="ergebnis" method="get">';
            echo '<input type="text" name="ergebnis" value="">';
            echo '<input type="hidden" name="rechenart" value="1">';
            echo '<input type="hidden" name="richtigesergebnis" value="'.$zufall3.'">';
            echo '<input type="hidden" name="richtige" value="'.$richtige.'">';
            echo '<input type="hidden" name="versuche" value="'.$versuche.'">';
            echo '<input type="hidden" name="time" value="'.time().'">';
            echo '<input type="submit" value="ergebnis abschicken">';
            echo '</form>';
            break;
        case "2":
            if($zufall>$zufall2){
                echo $zufall." - ".$zufall2." = ?";
                $zufall3 = $zufall - $zufall2;
            }
            else{
                echo $zufall2." - ".$zufall." = ?";
                $zufall3 = $zufall2 - $zufall;
            }
            echo '<form name="ergebnis" method="get">';
            echo '<input type="text" name="ergebnis" value="">';
            echo '<input type="hidden" name="rechenart" value="2">';
            echo '<input type="hidden" name="richtigesergebnis" value="'.$zufall3.'">';
            echo '<input type="hidden" name="richtige" value="'.$richtige.'">';
            echo '<input type="hidden" name="versuche" value="'.$versuche.'">';
            echo '<input type="hidden" name="time" value="'.time().'">';
            echo '<input type="submit" value="ergebnis abschicken">';
            echo '</form>';
            break;
        case "3":
            $zufall3 = $zufall*$zufall2;
            echo $zufall." * ".$zufall2." = ?";
            echo '<form name="ergebnis" method="get">';
            echo '<input type="text" name="ergebnis" value="">';
            echo '<input type="hidden" name="rechenart" value="3">';
            echo '<input type="hidden" name="richtigesergebnis" value="'.$zufall3.'">';
            echo '<input type="hidden" name="richtige" value="'.$richtige.'">';
            echo '<input type="hidden" name="versuche" value="'.$versuche.'">';
            echo '<input type="hidden" name="time" value="'.time().'">';
            echo '<input type="submit" value="ergebnis abschicken">';
            echo '</form>';
            break;
        case "4":
            $zufall3 = $zufall*$zufall2;
            $zufall4 = $zufall3/$zufall2;
            echo $zufall3." / ".$zufall2." = ?";
            echo '<form name="ergebnis" method="get">';
            echo '<input type="text" name="ergebnis" value="">';
            echo '<input type="hidden" name="rechenart" value="4">';
            echo '<input type="hidden" name="richtigesergebnis" value="'.$zufall4.'">';
            echo '<input type="hidden" name="richtige" value="'.$richtige.'">';
            echo '<input type="hidden" name="versuche" value="'.$versuche.'">';
            echo '<input type="hidden" name="time" value="'.time().'">';
            echo '<input type="submit" value="ergebnis abschicken">';
            echo '</form>';
            break;
    }
   
   //echo"Du hast f&uumlr deine mickrigen ".$richtige." Punkte ".$versuche." Versuche gebraucht.";
    
?>
