<?php 
    #Namen der Reifetabelle in config/tables.json speichern
    if (isset ($_POST['save_agingtable'])){
        $timestamp = time();
        $array = array( 'agingtable' => $_POST['agingtable'],'date' => $timestamp);
        $jsoninput = json_encode($array);
        file_put_contents('config/tables.json', $jsoninput);

        #3 Sekunden anzeigen, dass gespeichert wurde
        print '<p id="info-message" style="color: #ff0000; font-size: 20px;"><b>'. (_("the selection is saved")) .'</b></p>
            <script language="javascript">
                setTimeout(function(){document.getElementById("info-message").style.display="none"}, 3000)
            </script>';
    }
?>
