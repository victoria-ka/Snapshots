<?php

    include('connect.php'); 

    //Retrieve adventures from database and display them in the proper HTML format
    $selected = mysqli_real_escape_string($con, $_REQUEST['selected']);

    if (!$selected) {
        echo "Please pick a sorting method.";
    }
    else {
        if ($selected == 1) {
            $query = "SELECT * from Adventures ORDER BY Title";
        }

        if ($selected == 2) {
            $query = "SELECT * from Adventures ORDER BY Date DESC";
        }

        if ($selected == 3) {
            $query = "SELECT * from Adventures ORDER BY Location";
        }

        $result = mysqli_query($con, $query);

        while( $row = mysqli_fetch_array($result) ) {
            //Display each result with the card HTML format
            echo ' <div class="col s12 m6 l4 xl4">

                        <div class="card">

                            <div class="card-image">
                                <img src="' . $row['ImageURL'] . '">
                                <span class="card-title">' . $row['Title'] . '</span>
                            </div>

                            <div class="card-content">
                                <p class="location">' . $row['Location'] . '</p>
                                <p class="date">' . $row['Date'] . '</p><br>
                                <p class="description">' . $row['Description'] . '</p>
                            </div>

                        </div>

                    </div>';
        }
        
    }

    mysqli_close($con);


?>