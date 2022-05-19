<html>
<title>sqli page</title>
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
		<h1>SQL-INJECTION(SQLi)</h1>
		<p>SQL Injection refers to an injection attack wherein an attacker can execute malicious SQL statements (also commonly referred to as a malicious payload) that control a web application’s database server (also commonly referred to as a Relational Database Management System – RDBMS).<br/> Since an SQL Injection vulnerability could possibly affect any website or web application that makes use of an SQL-based database, the vulnerability is one of the oldest, most prevalent and most dangerous of web application vulnerabilities.</p>

        <p>By leveraging an SQL Injection vulnerability, given the right circumstances, an attacker can use it to bypass a web application’s authentication and authorization mechanisms and retrieve the contents of an entire database.<br/> SQL Injection can also be used to add, modify and delete records in a database, affecting data integrity.</p>

       <p>To such an extent, SQL Injection can provide an attacker with unauthorized access to sensitive data including, customer data, personally identifiable information (PII), trade secrets, intellectual property and other sensitive information.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/nmtaPNgfi6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></iframe>
	</div>
<div>
		<h1>Excercise</h1>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>

<script type="text/javascript">
generateQuiz("sqlinjection","sqli_res");
</script>





</body>
</html>

