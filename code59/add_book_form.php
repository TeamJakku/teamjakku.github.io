<html>  

<html lang="en">  

<head>
<meta name="viewport" content= "width-device-width, initial-scale=1">
<style>

	body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #3366cc;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #ffffff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #ffcc99;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
#main {
    transition: margin-left .5s;
    padding: 20px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>  

<body>
<h1>SPU Book Finder</h1>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Search</a>
  <a href="add_book_form.php">Post</a>
  <a href="delete_post.php">Delete</a>
  <a href="email_chat.php">Message</a>
  <a href="myAccount.php">My Account</a>
  <a href="logout.php">Log Out</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
} 
</script>
<!--<h2>Post</h2>-->
<!--<div class="container">
  <ul class="nav nav-tabs">
    <li><a href="index.php">Search Book</a></li>
    <li class="active"><a href="add_book_form.php">Post</a></li>
    <li><a href="myAccount.php">Myaccount</a></li>
  </ul>
</div> -->
<form class="form-horizontal" action="add_book.php">
<fieldset>

<!-- Form Name -->
<legend>Add Book</legend>

<!-- ISBN-->
<div class="form-group">
  <label class="col-md-4 control-label" for="isbn">ISBN:</label>  
  <div class="col-md-4">
  <input name="isbn" class="form-control input-md" id="isbn" type="text" placeholder="9999999999">
  <span class="help-block">Enter ISBN</span>  
  </div>
</div>

<!-- Tittle-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Title">Title</label>  
  <div class="col-md-4">
  <input name="Title" class="form-control input-md" id="Title" type="text" placeholder="e.g Algorithm Design ">
  <span class="help-block">Enter Title</span>  
  </div>
</div>

<!-- Author-->
<div class="form-group">
  <label class="col-md-4 control-label" for="author">Author</label>  
  <div class="col-md-4">
  <input name="author" class="form-control input-md" id="author" type="text" placeholder="Jon Kleinberg, Eva Tardos">
  <span class="help-block">Enter Author</span>  
  </div>
</div>



<!--Course-->
<div class="form-group">
  <label class="col-md-4 control-label" for="course">Course</label>  
  <div class="col-md-4">
  <input name="course" class="form-control input-md" id="course" type="text" placeholder="CSC 3430">
  <span class="help-block">Enter Course Name</span>  
  </div>
</div>

<!-- Edition-->
<div class="form-group">
  <label class="col-md-4 control-label" for="edition">Edition</label>  
  <div class="col-md-4">
  <input name="edition" class="form-control input-md" id="edition" type="text" placeholder="7th (optional)">
    
  </div>
</div>

<!-- Text Description input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-4">
  <input name="description" class="form-control input-md" id="description" type="text" placeholder="(optional)">
    
  </div>
</div>

<!-- User Details-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="register"></label>
		<div class="col-md-5">
			

				
				<div class="form-group col-sm-6">
					<label for="price" class="control-label">Listing Price</label>
					<input name="price" class="form-control input-md" id="price" type="text" placeholder="70.00">

				</div>

				<div class="form-group col-sm-6">
					<label class="control-label" for="condition">Condition</label>
					<select name="condition" class="form-control" id="condition">
						<option value="New">New</option>
            <option value="New">Like New</option>
						<option value="Used">Good Used</option>
            <option value="New">Fair</option>
					</select>
				</div>

			</div>
		</div>
	


					<output name="result"></output>
					
				</div>
	</div>
	

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button name="add_book_button" class="btn btn-primary" id="singlebutton">SUBMIT</button>
  </div>
</div>

</fieldset>
</form>
<form class="form-horizontal" action ="logout.php">
<fieldset>

<!-- Form Name -->
<legend></legend>


<!-- Button -->

<!--<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Logout</label>
  <div class="col-md-4">
    <button name="singlebutton" class="btn btn-primary" id="singlebutton">Logout</button>
  </div>
</div>-->

</fieldset>
</form>
  

</body>  

</html>