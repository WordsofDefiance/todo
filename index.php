 <!DOCTYPE html>
<html>
<head>
<title>Todo List App</title>
</head>

<body>
<h1>Todo List</h1>


<form action="actions/formhandler.php" method="post">
<table>
<tbody>
<tr>
<td>
<label>Name</td>
<td><input type="text" name="name"></label></td>
</tr>
<tr>
<td><label>Task</td>
<td><input type="text" name="task"></label></td>
</tr>
<tr>
<td><label>Task Description</td>
<td><input type="text" name="description"></label></td>
</tr>
<tr><td>
<input type="submit" value="Add Task">
</td></tr>
</form>
</tbody>
</table>

<h3>Submit a user name to see their tasks</h3>
<form action="actions/fetchusertasks.php" method="get">
<table> 
<tbody>
<tr>
<td><label>Username</td>
<td><input type="text" name="username"></label></td>
</tr>
<tr><td>
<input type="submit" value="Fetch Tasks">
</td></tr>
</tbody>
</table>

</form>



</body>
</html> 
