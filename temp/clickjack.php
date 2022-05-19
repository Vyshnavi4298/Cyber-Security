<html>
<title>clickjack page</title>
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
		<h1>CLICKJACKING</h1>
		<p>Clickjacking, also known as a "UI redress attack", is when an attacker uses multiple transparent or opaque layers to trick a user into clicking on a button or link on another page when they were intending to click on the the top level page. Thus, the attacker is "hijacking" clicks meant for their page and routing them to another page, most likely owned by another application, domain, or both.</p>

       <p>Using a similar technique, keystrokes can also be hijacked. With a carefully crafted combination of stylesheets, iframes, and text boxes, a user can be led to believe they are typing in the password to their email or bank account, but are instead typing into an invisible frame controlled by the attacker.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/oQ5lz-qbKag" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
<div>
		<h1>Excercise</h1>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>

<script type="text/javascript">
generateQuiz("clickjack", "cj_res");
</script>






</body>
</html>

