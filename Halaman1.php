<?php
    echo "<form method='post' action=''>";
    echo "<p1><center>TOPOKEDIA</p1></center>";
    echo "<center><table border='1'>";
    echo "<tr><th>NO</th><th>Nama Barang</th><th>Harga</th><th>Beli</th></tr>";

    echo "<tr>";
    echo "<th>";
    echo "1";
    echo "</th>";
    echo "<th>";
    echo "<input type='hidden' value='Keyboard' name='nick'> Keyboard";
    echo "</th>";
    echo "<th>";
    echo "80.000";
    echo "</th>";
    echo "<th>";
    echo "<input type='checkbox' name='prc[]' value='80000'>";
    echo "</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "2";
    echo "</th>";
    echo "<th>";
    echo "<input type='hidden' value='Mouse' name='nick'> Mouse";
    echo "</th>";
    echo "<th>";
    echo "100.000";
    echo "</th>";
    echo "<th>";
    echo "<input type='checkbox' name='prc[]' value='100000'>";
    echo "</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "3";
    echo "</th>";
    echo "<th>";
    echo "<input type='hidden' value='Monitor' name='nick'> Monitor";
    echo "</th>";
    echo "<th>";
    echo "600.000";
    echo "</th>";
    echo "<th>";
    echo "<input type='checkbox' name='prc[]' value='600000'>";
    echo "</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "4";
    echo "</th>";
    echo "<th>";
    echo "<input type='hidden' value='Printer' name='nick'> Printer";
    echo "</th>";
    echo "<th>";
    echo "1.000.000";
    echo "</th>";
    echo "<th>";
    echo "<input type='checkbox' name='prc[]' value='1000000'>";
    echo "</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "5";
    echo "</th>";
    echo "<th>";
    echo "<input type='hidden' value='Speaker' name='nick'> speaker";
    echo "</th>";
    echo "<th>";
    echo "300.000";
    echo "</th>";
    echo "<th>";
    echo "<input type='checkbox' name='prc[]' value='300000'>";
    echo "</th>";
    echo "</tr>";
    
    echo "<tr><th colspan='4'><input type='submit' value='Belanja'></th></tr>";

    if(isset($_POST['prc'])){

        $price=$_POST['prc'];
        $total=0;
        echo "<br>";
        echo "<table border='1'>";
        echo "<tr><th colspan='2' >Keranjang Belanja</th></tr>";
        for ($i=0; $i < count($price) ; $i++){
            echo "<th colspan='2'>"; echo $price[$i]."</th></tr>";

            $total += $price[$i];

        }

        echo "<tr><th>TOTAL</th>";
        echo "<th>$total</th></tr></center>";

    }
    
?>