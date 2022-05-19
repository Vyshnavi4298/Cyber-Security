<html>
<title>csrf page</title>
<script src="quiz.js"></script>
<body>
<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
<a href="logout.php">Logout</a>
	<div>
		<h1>CROSS-SITE REQUEST FORGERY(CSRF)</h1>
		<p>Cross-Site Request Forgery is an attack that forces an end user to execute unwanted actions on a web application in which they're currently authenticated. CSRF attacks specifically target state-changing requests, not theft of data, since the attacker has no way to see the response to the forged request. With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web application into executing actions of the attacker's choosing. If the victim is a normal user, a successful CSRF attack can force the user to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative account, CSRF can compromise the entire web application.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/tE_qHkm4X7Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
<div>
		<h1>Excercise</h1>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>

<script type="text/javascript">
generateQuiz("csrf", "csrf_res");
</script>






</body>
</html>

