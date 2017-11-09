
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

	background-color: #e2d8d7;
}
#hv{

	width: 6em;  height: 2em;
}
#hv:hover{

	background-color: #9fcca7;
}

	</style></header>
<body class="centered-wrapper">
	
	<form method="POST" action="check.php">
	<label> Enter username: <br> </label>
	<input type="text" name ="username" size="20" required> <br/>
	<label> Enter Password: <br> </label>
	<input type="password" name="password" size="20" required><br/>
	
	<input id="hv" type="submit" name="signin" value="login">
	<input id ="hv" type="button" value="cancel"></form>
	
</body>
</html>