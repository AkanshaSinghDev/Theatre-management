<?php

$con = @mysql_connect('localhost','root','') or die('Could not Connect!');
mysql_select_db('bookdeticket');

?>


<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #f75b10;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 35%;
}

input[type=submit]:hover {
    background-color: #f75b10;
}

input[type=reset] {
    background-color: #f75b10;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

input[type=reset]:hover {
    background-color: #f75b10;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: justify-all;
    margin-left: 30%;
    margin-right: 30%;
    animation-name: fadeIn;
    animation-duration:1s;
}

@keyframes fadeIn{
      0%{
        
        margin-top:-5%;
      }
      
      100%{
      margin-top:0%;
      }
    }

.heading{
  margin-left: 25%;
    margin-right: 25%;
    text-align: center;
}
textarea {
   resize: none;
}

.rating {
  overflow: hidden;
  vertical-align: bottom;
  display: inline-block;
  width: auto;
  height: 30px;
}

.rating > input {
  opacity: 0;
  margin-right: -100%;
}

.rating > label {
  position: relative;
  display: block;
  float: right;
  background: url('star-off-big.png');
  background-size: 30px 30px;
}

.rating > label:before {
  display: block;
  opacity: 0;
  content: '';
  width: 30px;
  height: 30px;
  background: url('star-on-big.png');
  background-size: 30px 30px;
  transition: opacity 0.2s linear;
}

.rating > label:hover:before,  .rating > label:hover ~ label:before,  .rating:not(:hover) > :checked ~ label:before { opacity: 1; }

body{
  background: url("back.png") no-repeat ;
  background-position: top-left; 
background-size: 25%;
background-attachment: fixed;
font-family: Montserrat;
}
</style>
</head>
<body>

<br><br><br>
<div class="heading">
<h1>VIT Cinema Feedback</h1>
<h3><i>We would love to hear your thoughts.</i></h3>
</div>

<div class="container">
  <form action="Submit.php" method="POST">
    <label for="fname">Movie Name</label>
   <select name="to_user" class="form-control">

<?php
$sql = mysql_query("SELECT MovieName From MoviesName");
$row = mysql_num_rows($sql);
while ($row = mysql_fetch_array($sql)){
echo "<option value='". $row['MovieName'] ."'>" .$row['MovieName'] ."</option>" ;
}
?>
</select>
    
    <label for="rating">Rating</label><br>
<span class="rating">
  <input id="rating5" type="radio" name="rating" value="5">
  <label for="rating5">5</label>
  <input id="rating4" type="radio" name="rating" value="4">
  <label for="rating4">4</label>
  <input id="rating3" type="radio" name="rating" value="3">
  <label for="rating3">3</label>
  <input id="rating2" type="radio" name="rating" value="2">
  <label for="rating2">2</label>
  <input id="rating1" type="radio" name="rating" value="1" checked>
  <label for="rating1">1</label>
</span>



    <br><br>
    <label for="subject">Review</label>
    <textarea id="subject" name="subject" placeholder="Tell us what you think about the movie.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">



  </form>
</div>
<div class="heading"><h3>View Reviews</h3>
</div>
<div class="container">
  <form action="view.php" method="POST">
      <label for="MovieName">Select Movie</label>

  <select name="to_user" class="form-control">
<?php
$sql = mysql_query("SELECT MovieName From MoviesName");
$row = mysql_num_rows($sql);
while ($row = mysql_fetch_array($sql)){
echo "<option value='". $row['MovieName'] ."'>" .$row['MovieName'] ."</option>" ;
}
?>
</select>
  <input type="Submit" value="View" style="margin-left: 40%;">
  </form>
</div>


</body>
</html>

</?>
