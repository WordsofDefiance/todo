 <!DOCTYPE html>
<html>
<head>
<title>Todo List App</title>
<link rel="stylesheet" href="./css/style.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
</head>

<body>
<h1>Todo List</h1>


<h3>Submit a user name to see their tasks</h3>
<form action="actions/fetchusertasks.php" method="get">
<table> 
<tbody>
<tr>
<td><label>Username</td>
<td><input type="text" name="username"></label></td>
</tr>
<tr><td>
<input class="shadow-drop-center" type="submit" value="Fetch Tasks">
</td></tr>
</tbody>
</table>

</form>

<h3>Submit a task for a user</h3>
<form action="actions/addatask.php" method="post">
    <table>
        <tbody>
            <tr>
                <td><label>Username</td>
                <td><input type="text" name="username"></label></td>
            </tr>
            <tr>
                <td><label>Task Name</td>
                <td><input type="text" name="taskname"></label></td>
            </tr>
            <tr>
                <td><label>Task Description</td>
                <td><input type="text" name="taskdescription"></label></td>
            </tr>
            <tr>
                <td><input class="shadow-drop-center" type="submit" value="Add Task"></td>
            </tr>
        </tbody>
    </table>
</form>

<h3>Add A User</h3>
<form action="actions/addauser.php" method="post">
    <table>
        <tbody>
            <tr>
                <td><label>Username</td>
                <td><input type="text" name="username"></label></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add User"></td>
            </tr>
        </tbody>
    </table>
</form>

</body>
</html> 
