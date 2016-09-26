<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<nav>


<ul>	
  <li><a href="http://localhost/su/index.php">Home</a></li>
    <li><a  href="http://localhost/su/login.php">Log In</a></li>
	   <img src='job2.png' id="logo"/>
    <li><a href="http://localhost/su/signup.php">Sign Up</a></li>
    <li><a href="http://localhost/su/help.php">Help</a></li>


  </ul>
</nav>

<style>

#logo { 
height:30px;
}



body {
  font-family: 'Open Sans', sans-serif;


}


nav {
  position: absolute; 
  top: 0;
  right:0px;
  width:100%;
  background-color: black;

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
  color: white;
  font-size: 1rem;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.2s ease;
}
nav ul li a:hover {
  color: blue;
}
a.active {
  border-bottom: 2px solid #ecf0f1;
}




</style>

