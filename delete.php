<?php
    
    //Connect to database
    include('connect.php');  

    $text = mysqli_real_escape_string($con, $_REQUEST['attribute']);
    $selected = mysqli_real_escape_string($con, $_REQUEST['selected']);

    if ($selected == 1) {
        $query = "DELETE FROM Adventures WHERE Title='" . $text . "'";
    }
    
    if ($selected == 2) {
        $query = "DELETE FROM Adventures WHERE Date='" . $text . "'";
    }

    if ($selected == 3) {
        $query = "DELETE FROM Adventures WHERE Location='" . $text . "'";
    }
    
    
    $deletion = mysqli_query($con, $query);

    $query2 = "SELECT * from Adventures ORDER BY id DESC";

    $result = mysqli_query($con, $query2);

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

    mysqli_close($con);


?>