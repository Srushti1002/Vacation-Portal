<? php
<!DOCTYPE html>

<html>
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
       <a href="index.html">Home</a>		
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
       <a href="discount.html">Discount</a>
       <a href="about.html">About</a>
       <a href="blog.html">Blog</a>
       <a href="contact.html">Contact</a>
       
   </div>

    
   <div class="container">
           <img class="img" src="images/hero_bg_2.jpg" alt="Snow" style="width:50%;"> 		

   </div>
   
   <form action="insert.php" method="POST">
 <table>
  <tr>
   <td>Name :</td>
   <td><input type="text" name="username" required></td>
  </tr>
  <tr>
   <td>Password :</td>
   <td><input type="password" name="password" required></td>
  </tr>
  <tr>
   <td>Gender :</td>
   <td>
    <input type="radio" name="gender" value="m" required>Male
    <input type="radio" name="gender" value="f" required>Female
   </td>
  </tr>
  <tr>
   <td>Email :</td>
   <td><input type="email" name="email" required></td>
  </tr> 
  <tr>
   <td>Phone no :</td>
   <td>
    <select name="phoneCode" required>
     <option selected hidden value="">Select Code</option>
     <option value="977">977</option>
     <option value="978">978</option>
     <option value="979">979</option>
     <option value="973">973</option>
     <option value="972">972</option>
     <option value="974">974</option>
    </select>
    <input type="phone" name="phone" required>
   </td>
  </tr>
  <tr>
   <td><input type="submit" value="Submit"></td>
  </tr>
 </table>
</form>
   
   
   
 </div>
 
   
 </body>
</html>
?>