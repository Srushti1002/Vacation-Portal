<? php
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
    <p>Suggestions: <span id="txtHint"></span></p> 

    <p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>
    
    <script>
    function showHint(str) {
      var xhttp;
      if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "gethint.php?q="+str, true);
      xhttp.send();   
    }
    </script>
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
</body>
</html>
?>