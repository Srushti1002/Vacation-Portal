<? php
<!DOCTYPE html>
<html lang="en">
  <head>
    
	<title>Vacation </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

    
    
  </head>
  <body>
  
  <div class="site-wrap">

    <h1>Vacation</h1>
	     
	
	 <div class="navbar">
		<a href="#home">Home</a>		
		<div class="dropdown">
			<button class="dropbtn">Destinations 
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">United States</a>
				<a href="#">United Kingdom</a>
				<a href="#">Japan</a>
				<a href="#">France</a>
			</div>
		</div> 
		<a href="#news">Discount</a>
		<a href="#news">About</a>
		<a href="#news">Blog</a>
		<a href="#news">Contact</a>
		
	</div>

	 
	<div class="container">
            <img class="img" src="images/hero_bg_2.jpg" alt="Snow" style="width:50%;"> 		

    </div>
	
	
	
	
    
  </div>
  
    
  </body>
</html>
?>