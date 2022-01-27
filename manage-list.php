<?php
  include('config/constants.php');
?>
<html>
    <head>
        <title>Manage List</title>
    </head>
<body>
<h1>Task Manager</h1>
<a href="<?php echo SITEURL; ?>">Home</a>
<h4>Manage List Page</h4>
<p>
    <?php
    //check whether the session is created or not
    if(isset($_SESSION['add']))
    {
        //display session message
        echo $_SESSION['add'];
        //remove the message after displaying once 
         unset($_SESSION['add']);
    }
    ?>
</p>
<div class="all-lists">
<a href="<?php echo SITEURL; ?>add-list.php">Add List</a>
<table>
<tr>
    <th>S.N</th>
    <th>List Name</th>
    <th>Actions</th>
</tr>
<?php

//connect database
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
/*if($conn==true)
   {
    echo "database is connected";
   }
*/
//select database
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
//check database is connected or not
/*
   if($db_select==true)
   {
       echo "database is connected";
   }
*/
//sql query to display all data from query
$sql="SELECT * FROM tbl_lists";
//execute query

$res=mysqli_query($conn,$sql);

//check whether the query is executed successfully or not

if($res==true)
{
    //echo "successful";
    $count_rows=mysqli_num_rows($res);//count no of rows 
    
    //count serial number here we cant use list id becaus when we delete a row from db the order of number is not same 
    //so by creating a serial number it will increment automatically when loop circles

    $sn=1;

    //check whether there is data in database or not

    if($count_rows>0)
    {
         while ($row=mysqli_fetch_assoc($res))
         {
             //getting data from database
             $list_id=$row['list_id'];
             $list_name=$row['list_name'];
             ?>
             <tr>
               <td><?php echo $sn++;?></td>
               <td><?php echo $list_name;?></td>
               <td>
                   <a href="#">Update</a>
                   <a href="<?php echo SITEURL; ?>delete-list.php">Delete</a>
               </td>
             </tr>
             <?php
         }
    }
    else 
    {
      //no data in database
      ?>
      <tr>
          <td colspan="3">No list is added yet.</td>
      </tr>
      <?php  
    }
}
?>
</table>
</div>
</body>
</html>