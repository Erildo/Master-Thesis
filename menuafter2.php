<?php 
 if(!isset($_SESSION)) 
    { session_start();

    } 
include_once('db.php');
if($_SESSION["type"]=="user"){
header("Location:logout.php");
}
?>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<nav>
  <ul>
    <li>
	<a  href="http://localhost/su/profile2.php">Profile</a></li>

    <li><a href="http://localhost/su/searchco.php">Search</a></li>
    <li><a href="http://localhost/su/logout.php">Log out</a></li>

  </ul>
  
</nav>

<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
}


nav {
  width: 100%;
  height: 60px; 
  position: fixed; 
  top: 0;
  background: #3f51b5;
}

nav ul {
  padding: 20px;
  margin: 0 auto;
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
  margin: 0 10px;
}
nav ul li a {
  padding: 10px 0;
  color: #fff;
  font-size: 1rem;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.2s ease;
}
nav ul li a:hover {
  color: #34495E;
}
a.active {
  border-bottom: 2px solid #ecf0f1;
}

/* Headings */

h1 {
  font-size: 5rem;
  color: #34495E;
}

/* Sections */


</style>

