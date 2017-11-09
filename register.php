<html>
<header>
<style>
html, body {
    height: 100%;

    margin:50px 0; 
    padding:50px;
}


html {
    display: table;
    margin: auto;

}

body {
    display: table-cell;
    vertical-align: middle;
}
.centered-wrapper{

	background-color: #8e9990;
	
}
#hv{

	width: 9em;  height: 2em;
	display: inline-block;
}
#hv:hover{

	background-color: green;
}

	</style></header>
<body class="centered-wrapper">
	
	<form method="post" action="reg.php">
	<label> Name: &nbsp; &nbsp; &nbsp; &nbsp;</label><br>
	<input type="text" name ="name" size="30" placeholder="Type your name here" required></body>  </br>
	<label> Username: &nbsp;</label><br>
	<input type="text" name="username" size="30" placeholder="Type your username here" required></br>
	<label> Password: &nbsp;</label><br>
	<input type="text" name ="password" size="30" placeholder="Type your password here" required><br><br>
	<input type="submit" value="Save" id="hv" >
	<input type="button" value="cancel" id= "hv"></form>
	</div>
</body>
</html>