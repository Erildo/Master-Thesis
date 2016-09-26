
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<nav>
  <ul>
    <li>
	<a  href="http://localhost/su/profile.php">Profile</a></li>
<li><a href="http://localhost/su/search.php">Search</a></li>
	   <img src='job5.png' id="logo"/>

	    <li><a  href="http://localhost/su/jobview.php">Jobs</a></li>
    <li><a href="http://localhost/su/logout.php">Log out</a></li>

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
  width: 100%;
  height: 60px; 
  position: fixed; 
  top: 0;
  background: #3f51b5;
}

nav ul {
  padding: 10px;
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

