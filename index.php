<!DOCTYPE html>
<html>
   
    <head>
        <meta charset="utf-8">
        <title>Adventure Journal</title>
        <meta name="description" content="Find adventures and share your own">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        
        <div id="side-menu">
           
            <ul id="slide-out" class="side-nav">
               
                <li id="add-data"><a class="waves-effect waves-light green btn">Add Snapshot</a></li>
                <li>
                    <div id="add-data-form" class="row">
                        <form id="create-data" action="add.php" method="post" class="col s12">
                            <div class="input-field col s12">
                                <input id="title" name="title" type="text" class="validate">
                                <label for="title">Title</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="date" name="date" type="date" class="validate">
                                <label for="date">Date</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="location" name="location" type="text" class="validate">
                                <label for="location">Location</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="img-url" name="img-url" type="text" class="validate">
                                <label for="img-url">Image URL</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea" data-length="200"></textarea>
                                <label for="description">Description</label>
                            </div>
                            <div class="col 12">
                                <button class="btn waves-effect waves-light green" id="enter">Submit
                                    <i class="material-icons right">add</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                
                <li id="sort-data"><a class="waves-effect waves-light blue btn">Sort Snapshots</a></li>
                <li>
                    <div id="sort-data-form" class="row">
                        <form id="order-data" action="sort.php" method="post" class="col s12">
                            <div class="input-field col s12">
                                <select name="selected">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Title</option>
                                    <option value="2">Date</option>
                                    <option value="3">Location</option>
                                </select>
                                <label>Sort By</label>
                            </div>
                            
                            <div class="col 12">
                                <button class="btn waves-effect waves-light blue" id="sort">Sort
                                    <i class="material-icons right">sort</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                
                <li id="remove-data"><a class="waves-effect waves-light red btn">Delete Snapshots</a></li>
                <li>
                    <div id="remove-data-form" class="row">
                        <form id="trash-data" action="delete.php" method="post" class="col s12">
                            <div class="input-field col s12">
                                <select name="selected">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Title</option>
                                    <option value="2">Date</option>
                                    <option value="3">Location</option>
                                </select>
                                <label>Delete By</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <input id="attribute" name="attribute" type="text">
                                <label for="attribute">Element Here</label>
                            </div>
                            
                            <div class="col 12">
                                <button class="btn waves-effect waves-light red" id="delete">Delete
                                    <i class="material-icons right">delete</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                
                <li id="change-page-color"><a class="waves-effect waves-light purple btn">Change Theme</a></li>
                <li>
                    <div id="change-theme-form" class="row">
                        <form id="change-theme" class="col s12">
                            <div class="input-field col s12">
                                <select name="selected" id="selected-color">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Purple</option>
                                    <option value="2">Red</option>
                                    <option value="3">Teal</option>
                                    <option value="4">Blue</option>
                                    <option value="5">Pink</option>
                                    <option value="6">White (Default)</option>
                                </select>
                                <label>Change Theme</label>
                            </div>
                            
                            <div class="col 12">
                                <button class="btn waves-effect waves-light purple" id="sort">Change
                                    <i class="material-icons right">format_paint</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                <hr>
            </ul>
          
        </div>
 
        
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="medium material-icons">menu</i></a>
           
        <div class="container">
           
            <!-- Title -->
            <div class="row">
                <h1 class="col s12" id="heading">Snapshots</h1>
                <h3 class="col s12" style="font-size: 24px;" id="subtitle">Your own personal travel diary.</h3>
                <div id="loading"><img src="img/camera.gif"></div>
	            <p id="response"></p>
            </div>
            
            <!-- Adventures Placed Here -->
            <div id="result" class="row">
                
                
                
            </div>
        
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="script.js"></script>

        
    </body>
    
</html>