<?php

    include('connect.php');  

    $title = mysqli_real_escape_string($con, $_REQUEST['title']);
    $location = mysqli_real_escape_string($con, $_REQUEST['location']);
    $date = mysqli_real_escape_string($con, $_REQUEST['date']);
    $imgURL = mysqli_real_escape_string($con, $_REQUEST['img-url']);
    $description = mysqli_real_escape_string($con, $_REQUEST['description']);


    //Create query
    $query2 = "INSERT INTO Adventures (Title,Location,Date,ImageURL,Description) VALUES ('$title','$location','$date','$imgURL','$description')";
    $insertion = mysqli_query($con, $query2);

    /*Add to database
    if ( $result ) {
        echo "Success!";
    }
    else {
        echo "Failure";
    }*/

    $query = "SELECT * from Adventures ORDER BY id DESC";
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
    //Close connection to database

    mysqli_close($con);

    //Hopefully page automatically adds without having to call showItems again?

?>