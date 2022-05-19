<html>
<title>xss page</title>
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
		<h1>CROSS-SITE SCRIPTING(XSS)</h1>
		<p>Cross-Site Scripting attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites.<br/> XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user.<br/> Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.</p>

       <p> An attacker can use XSS to send a malicious script to an unsuspecting user.<br/> The end user’s browser has no way to know that the script should not be trusted, and will execute the script. <br/>Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other sensitive information retained by the browser and used with that site.<br/> These scripts can even rewrite the content of the HTML page</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/AQUUeZNFY2I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div>
		<h1>Excercise</h1>
		<div id="score"></div>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>

<script type="text/javascript">
generateQuiz("xss","xss_res");
</script>


</body>
</html>

