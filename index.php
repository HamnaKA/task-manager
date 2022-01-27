<?php
  include('config/constants.php');
?>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h1>TASK MANAGER</h1>
    <div class="menu">
        <a href="<?php echo SITEURL; ?>">Home</a><br>
        <a href="#">To Do</a>
        <a href="#">Doing</a>
        <a href="#">Done</a>
        <a href="<?php echo SITEURL; ?>manage-list.php">Manage Lists</a>
    </div>
    <div class="all_tasks">
        <a href="#">Add Tasks</a>
        <table>
            <tr>
                <th>S.N</th>
                <th>Task Name</th>
                <th>Priority</th>
                <th>Deadline</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Design a Website</td>
                <td>Medium</td>
                <td>23/05/2020</td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

