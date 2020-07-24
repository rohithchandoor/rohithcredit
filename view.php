<?php
    require_once('db_connect.php');

    $query = "select * from users";
    $result = mysqli_query($link,$query);
?>

<html>
	<head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Credit Management</title>
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
        <div class=".container">
            <h1 style="color:crimson;">All users</h1>
        <table>
			<thead>
				<tr>
                    <th>S No.</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Credits</th>
				</tr>
			</thead>

            <!--fetch and display data from MySQL-->
            <?php
                $i=1;

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["credit"] . "</td>";
                    echo "<td><a href=transfer.php?name=" . $row['name'] . ">transfer</a><td>";
                    echo "</tr>";
                    ++$i;
                }
            ?>

        </table>
        </div>
    </body>
</html>