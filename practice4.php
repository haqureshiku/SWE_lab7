<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int)$_POST["n"];

        if ($n > 0) {
            echo "<h3>$n x $n Multiplication Table</h3>";
            echo "<table border='1'>";

            for ($i = 1; $i <= $n; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $n; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Please enter a valid positive number.";
        }
    }
    ?>