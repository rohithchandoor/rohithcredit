   <?php
    require_once('db_connect.php');
    $query = "select * from transfers";
    $result1 = mysqli_query($link,$query);

?>

<html>
    <head>
        <title>Credit Management</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                font-size: 20px;
            }
            table{
                border-style: solid;
                border-color:#FFBF00;
                border-radius: 10px;
                align-items: center;
              justify-content: center;
            }
            thead{
                background-color: #F6CEF5;
                color:#FE2E2E;
                border-bottom: solid yellow;
            }
            td{
                background-color:#CEF6F5;
                color:crimson; 
            }
        </style>
    </head>

    <body>
        <h1 style="color:crimson;">All Transactions</h1>
        <table>
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>From</th>
                    <th>To</th>
                    <th>CreditsTransfered</th>
                </tr>
            </thead>

            <!--fetch and display data from MySQL-->
            <?php
                $i=1;

                while($row1 = mysqli_fetch_array($result1)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row1["from_user"] . "</td>";
                    echo "<td>" . $row1["to_user"] . "</td>";
                    echo "<td>" . $row1["credit_tr"] . "</td>";
                    echo "</tr>";
                    ++$i;
                }
            ?>

        </table>
    </body>
</html>
