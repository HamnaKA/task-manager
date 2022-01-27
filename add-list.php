<?php
  include('config/constants.php');
?>
<html>
    <head>
        <title>Add List</title>
    </head>
    <body>
        <h1>TASK MANAGER</h1>
        <a href="<?php echo SITEURL; ?>">Home</a>
        <a href="<?php echo SITEURL; ?>manage-list.php">Manage Lists</a>
        <h3>Add list page</h3>
        <p>
            <?php
            //check whether the session is created or not
            if(isset($_SESSION['add_fail']))
            {
                //display session message
                echo $_SESSION['add_fail'];
                //remove the message after displaying once 
                unset($_SESSION['add_fail']);
            }
            ?>
        </p>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>List Name:</td>
                    <td><input type="text" name="list_name" placeholder="Enter the list name" required></td>
                </tr>
                <tr>
                    <td>List Description:</td>
                    <td><textarea name="list_description" placeholder="Enter the description"></textarea></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="SAVE"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $list_name=$_POST['list_name'];
    $list_description=$_POST['list_description'];
   //Connecting Database

   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
   /*
   //check whether database connected or not
   if($conn==true)
   {
    echo "database is connected";
   }
   */
   
   //select database

   $db_select=mysqli_select_db($conn,DB_NAME);
   //check database is connected or not
   /*
   if($db_select==true)
   {
       echo "database is connected";
   }
   */
  //sql query to insert data into database give echo to test whether sql query works 

        $sql="INSERT INTO tbl_lists SET 
        list_name='$list_name',
        list_description='$list_description'
        ";
// execute query insert into database

        $res=mysqli_query($conn,$sql);
        //check query inserted succesfully or not
        if($res==true)
        {
            // echo "successfuly inserted";
            //create a session variable to display message
            $_SESSION['add']="list added succesfully";
            //redirect to manage list page
            header('location:'.SITEURL.'manage-list.php');

        }
        else
        {
            //echo "failed to insert";
            //create a session to save message
            $_SESSION['add_fail']="failed to add list";
            //redirect to addlist page itself 
            header('location:'.SITEURL.'add-list.php');
        }
      

}
?>