 <!DOCTYPE html>
<html lang="en">
<head>
<title>Todo List App</title>
<link rel="stylesheet" href="./css/style.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
</head>

<body>
	<main id="main">
		<h1 class="app-title focus-in-contract" >Todo List</h1>


		<h3>Submit a user name to see their tasks</h3>
		<form name="Fetch User Tasks" action="actions/fetchusertasks.php" method="get">
			<label for="fetch-username">Username
			<input id="fetch-username" type="text" name="username"></label>
			<input class="shadow-pop" type="submit" value="Fetch Tasks">
		</form>

		<h3>Submit a task for a user</h3>
		<form name="Add a task" action="actions/addatask.php" method="post">
			<label>Username
			<input type="text" name="username"></label>
			<label>Task Name
			<input type="text" name="taskname"></label>
			<label>Task Description
			<input type="text" name="taskdescription"></label>
			<input class="shadow-pop" type="submit" value="Add Task">
		</form>

		<h3>Add A User</h3>
		<form name="Add a user" action="actions/addauser.php" method="post">
			<label>Username
			<input type="text" name="username"></label>
			<input class="shadow-pop" type="submit" value="Add User">
		</form>
		</main>
</body>
</html> 
