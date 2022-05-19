<html>
<title>https page</title>
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
		<h1>HTTP SECURE</h1>
		<p>HTTPS stands for Hypertext Transfer Protocol Secure. It is the protocol where encrypted HTTP data is transferred over a secure connection. By using secure connection such as Transport Layer Security or Secure Sockets Layer, the privacy and integrity of data are maintained and authentication of websites is also validated.</p>

        <p> HTTPS ensures data security over the network - mainly public networks like Wi-Fi. HTTP is not encrypted and is vulnerable to attackers who are eavesdropping and can gain access to website database and sensitive information. By virtue, HTTPS encryption is done bi-directionally, which means that the data is encrypted at both the client and server sides. Only the client can decode the information that comes from the server. So, HTTPS does encryption of data between a client and a server, which protects against eavesdropping, forging of information and tampering of data. </p>
        <p> But how do you ensure if you are seeing an HTTPS-enabled web page? Just check the address bar that carries the site name against different background colours with a lock icon at the left corner. However, this design can be different for different browsers. For example, consider going to a bank website, say hdfcbank.com. A non-secured HTTP will open up. But when we go to the login page, we can see an HTTPS in the address bar with some specific design. Implementation: HTTPS is mainly used by those websites which deal with monetary transactions or transfer user's personal data which could be highly sensitive. Banking websites are common examples. In layman's terms, HTTPS ensures that users watch websites that they want to watch. Data exchanged between the user and the website is not read, stolen or tampered with by a third party.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/77gq4V_gc8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
<div>
		<h1>Excercise</h1>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>

<script type="text/javascript">
generateQuiz("https", "https_res");
</script>






</body>
</html>

