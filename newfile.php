<?php
include("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Packet Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            background : linear-gradient(#CAF0F8 , #9198e5) ;
        }

        th {
            background-color: #f2f2f2;
        }
        button{
         margin : 5px; 
         padding : .5em ; 
         margin-top : 7px;
         text-decoration: none ; 
         font-size : medium ; 
         font-weight : bold;
        }
        a{
         color : black ; 
         text-decoration : none ; 
         padding-top : 5px ; 
        }
    </style>
</head>
<body>
    <button><a href="/NMT/NMT11/Analyzer.php">Back</a></button>
    <h1>Packet Information</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $protocol = $_POST["protocol"];
        $property = $_POST["property"];
        $filename = $protocol;
        $ipv = $_POST['ipv'];
        $intern = $_POST['interface'];

        if (file_exists($filename)) {
            $lines = file($filename);

            if ($property == "all") {
                echo "<h2>Interface $intern Packets of $protocol $ipv Packets - All Properties</h2>";
                echo "<table>";
                echo "<tr><th>Timestamp</th><th>Source MAC</th><th>Destination MAC</th><th>Source IP</th><th>Destination IP</th><th>Packet Length</th></tr>";
               
                foreach ($lines as $line) {
                    $fields = explode(" ", $line);
                    echo "<tr>";
                    foreach ($fields as $field) {
                        echo "<td>$field</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                $property_header = ucfirst($property);
                echo "<h2>Interface $intern Packets of $protocol $ipv - $property_header</h2>";
                echo "<table>";
                echo "<tr><th>$property_header</th></tr>";

                foreach ($lines as $line) {
                    $fields = explode(" ", $line);
                    $value = '';

                    // Determine which property to display
                    if ($property == "timestamp") {
                        $value = $fields[0];
                    } elseif ($property == "sourcemac") {
                        $value = $fields[1];
                    } elseif ($property == "destinationmac") {
                        $value = $fields[3];
                    } elseif ($property == "sourceip") {
                        $value = $fields[11];
                    } elseif ($property == "destinationip") {
                        $value = $fields[13];
                    } elseif ($property == "packet_length") {
                        $value = intval($fields[15]);
                    }
                    echo "<tr><td>$value</td></tr>";
                }

                echo "</table>";
            }
        } else {
            echo "No data available for $protocol packets.";
        }
    }
    ?>
</body>
</html>
<?php
include("footer.php");	
?>
