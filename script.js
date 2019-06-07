$(function(){	//document.ready function
    
    $(document).ajaxStart(function(){	//whenever an ajax method starts on anything in the document
        $('#loading').css("display", "block");//change display of gif
    });

    $(document).ajaxComplete(function(){	//whenever an ajax method completes on anything in the document
        $('#loading').css("display", "none");//change display of gif
    });

    $.get("showItems.php", function(data,status){	//get data from mysql-ajax.php file.
        $("#result").html(data);	//replace the html in the item with id "result" with the data returned by the .get ajax call.
    });
    
    
    //Send info from "Add Snaphot" form to database to create new entry
    $('#create-data').on('submit', function(event){
        
        event.preventDefault(); //Get rid of default actions of submitting the form
        var details = $(this).serialize();
        
        $.ajax({
            type: "POST", //Method of sending the information
            url: "add.php", //File where information is being sent 
            data: details, //what the query for the information is called
            timeout: 2000,
            beforeSend: function(){
                $('#loading').text("Loading");
            },
            complete: function(){
                $('#loading').text("");
            },
            success: function(data){
                $('#result').html(data); //Return the data from the php file
            },
            error: function(data){
                $('#response').text("I'm sorry, but there seems to have been an error. Please try again later");
            }
        });
        
    });
    
    //AJAX call for sorting the data by title, date, or location
    $('#order-data').on('submit', function(event){
        
        event.preventDefault(); //Get rid of default actions of submitting the form
        var details = $(this).serialize();
        
        $.ajax({
            type: "POST", //Method of sending the information
            url: "sort.php", //File where information is being sent 
            data: details, //what the query for the information is called
            timeout: 2000,
            beforeSend: function(){
                $('#loading').text("Loading");
            },
            complete: function(){
                $('#loading').text("");
            },
            success: function(data){
                $('#result').html(data); //Return the data from the php file
            },
            error: function(data){
                $('#response').text("I'm sorry, but there seems to have been an error. Please try again later");
            }
        });
        
    });
    
    //AJAX call for removing the data by title, date, or location
    $('#trash-data').on('submit', function(event){
        
        event.preventDefault(); //Get rid of default actions of submitting the form
        var details = $(this).serialize();
        
        $.ajax({
            type: "POST", //Method of sending the information
            url: "delete.php", //File where information is being sent 
            data: details, //what the query for the information is called
            timeout: 2000,
            beforeSend: function(){
                $('#loading').text("Loading");
            },
            complete: function(){
                $('#loading').text("");
            },
            success: function(data){
                $('#result').html(data); //Return the data from the php file
            },
            error: function(data){
                $('#response').text("I'm sorry, but there seems to have been an error. Please try again later");
            }
        });
        
    });
    
    //Change background color based on selected option
    $('#change-theme').on('submit', function(event) {
        event.preventDefault();
        
        var color = $('#selected-color').val();
        
        if ( color == 1) {
            $("body").first().css("background-color","#8e24aa");
            $('#heading').css("color","white");
            $('#subtitle').css("color","white");
        }
        if ( color == 2) {
            $("body").first().css("background-color","#e53935");
            $('#heading').css("color","white");
            $('#subtitle').css("color","white");
        }
        if ( color == 3) {
            $("body").first().css("background-color","#009688");
            $('#heading').css("color","white");
            $('#subtitle').css("color","white");
        }
        if ( color == 4) {
            $("body").first().css("background-color","#2196f3");
            $('#heading').css("color","white");
            $('#subtitle').css("color","white");
        }
        if ( color == 5) {
            $("body").first().css("background-color","#e91e63");
            $('#heading').css("color","white");
            $('#subtitle').css("color","white");
        }
        if ( color == 6) {
            $("body").first().css("background-color","white");
            $('#heading').css("color","black");
            $('#subtitle').css("color","black");
        }
    });
    
    //Adds blackbox effect to images
    $('.materialboxed').materialbox();
    
    //Select menu javascript for MaterializeCSS
    $('select').material_select();
    
    //Hide form in sort menu
    $('#sort-data-form').hide();
    
    //Hide add form in menu
    $('#add-data-form').hide();
    
    //Hide remove form in menu
    $('#remove-data-form').hide();
    
    //Hide form in theme menu
    $('#change-theme-form').hide();
    
    //Show add form in menu to submit new snapshot
    $('#add-data').on('click', function() {
        $('#add-data-form').toggle(500,'swing');
    });
    
    //Show sort form in menu to sort snapshots
    $('#sort-data').on('click', function(){
        $('#sort-data-form').toggle(500,'swing');
    });
    
    //Show delete form in menu to delete selected snapshot
    $('#remove-data').on('click', function(){
        $('#remove-data-form').toggle(500,'swing');
    });
    
    //Show theme form to change color of background
    $('#change-page-color').on('click', function(){
        $('#change-theme-form').toggle(500,'swing');
    });
    
    //Settings for sidenav
    $('.button-collapse').sideNav({
        menuWidth: 400, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
      }
    );
    
});