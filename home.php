<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<nav class="navbar">
    <div class="navbar__container">
        <a id="navbar__logo">
		<img id="logo" src="logo.jpg" width="120" height="100">
            Nkijang Homes
		</a>
         <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__btn">
                <a href="logout.php" class="button">Logout</a>
                </li>
            </ul>
        </div>
</nav>
	<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <h3>Kindly place you request</h3>
	<br><br>
	<form>
	<p>Request Type:</p>
	<input type="text" id="request" name="request" placeholder="sale or rent">
	<br><br>
	<p>No. of bedrooms:</p>
	<select id="select" name="option">
            <option value="kenya">Bedsitter</option>
            <option value="tanzania">1 bedroom</option>
            <option value="uganda">2 bedroom</option>
            <option value="ethiopia">3 bedroom</option>
            <option value="south-sudan">4 bedroom</option>
            <option value="north-sudan">5+ bedroom</option>
        </select>
	</form>
	<br><br>
	<p>Budget Range:</p>
	<input type="number" id="min" placeholder="min"> <b style="color:#351868; font-size:1.5rem;margin-left:10px;">To</b> <input type="number" id="max" placeholder="max">
	<br><br><br>
	<p>E-mail:</p>
	<input type="email" id="request" name="email" placeholder="example@gmail.com">
	<br><br>
	<p>Phone number:</p>
	<input type="tel" id="request" name="phone" placeholder="+254...">
	<br><br>
	<button type="submit" id="submit"><a href="confirm.html">Submit</a></button>
	<br><br><br>
<footer class='footer'>
        <div class='footer-row'>
            <div class='footer-column' id='left-footer'>
                <ul id='footerList'>
                    <td><a id='flist' href='nkajiang.html'>
                            <li>Home
                        </a></li>
                    </td>
                    <td><a id='flist' href='about.html'>
                            <li>About Us
                        </a></li>
                    </td>
                    <td><a id='flist' href='contact.html'>
                            <li>Contact Us
                        </a></li>
                    </td>
                    <td><a id='flist' href='php/login.php'>
                            <li>Login
                        </a></li>
                    </td>
                    <td><a id='flist' href='php/signup.php'>
                            <li>Registration
                        </a></li>
                    </td>
                </ul>
            </div>

            <div class='footer-column' id='mid-footer'>
                <ul id='footerList'>
                    <th>
                        <p id='flist'>
                            <li><b>Vision</b>
                        </p>
                        </li>
                    </th>
                    <td>
                        <p id='flist'>
                            <li>To enhance top class accomodation to all people at an achievable price.
                        </p>
                        </li>
                    </td>
                    <br>
                    <th>
                        <p id='flist'>
                            <li><b>Mission</b>
                        </p>
                        </li>
                    </th>
                    <td>
                        <p id='flist'>
                            <li>To make a paradise on earth by providing the best settlements in the worls and in all kinds. 
                        </p>
                        </li>
                    </td>
                </ul>
            </div>

            <div class='footer-column' id='right-footer'>
                <ul id='footerList'>
                    <th>
                        <p id='flist'>
                            <li><b>Contact Us</b>
                        </p>
                        </li>
                    </th>
                    <td>
                        <p id='flist'>
                            <li>Address P.O. Box 30197-00100, Nairobi, Kenya</li>
                        </p>
                    </td>
                    <td>
                        <p id='flist'>
                            <li>Phone: 0769393310</li>
                        </p>
                    </td>
                    <td>
                        <p id='flist'>
                            <li>E-mail address: nkajiangallocation.org.ke</li>
                        </p>
                    </td>
                </ul>

                <div class='link-row'>
                    <div class='link-column'>
                        <a href='https://www.facebook.com/'>
                            <img class='thumbnail-footer' src='fb.png' width='50' height='50'>
                        </a>
                    </div>

                    <div class='link-column'>
                        <a href='https://twitter.com/'>
                            <img class='thumbnail-footer' src='tw.png' width='50' height='50'>
                        </a>
                    </div>

                    <div class='link-column'>
                        <a href='https://instagram.com/'>
                            <img class='thumbnail-footer' src='in.png' width='50' height='50'>
                        </a>
                    </div>

                    <div class='link-column'>
                        <a href='https://youtube.com/'>
                            <img class='thumbnail-footer' src='yt.png' width='50' height='50'>
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <hr id='hr'>
        <p id='footerText'>&copy 2023 Nkajiang Rental Houses LTD. All rights reserved.</p>
    </footer> 
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>