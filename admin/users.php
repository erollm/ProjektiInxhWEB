<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){
  if(isset($_GET['edit'])){
    $selectedId = $_GET['edit'];
    $user->selectUser($selectedId);
    include_once ('admin/users/edit.php');
  }
  else{
   if(isset($_GET['delete'])){
       $deleteid = $_GET['delete'];
       $user->deleteUser($deleteid);
   }
$users = $user->getAllUsers();
?>
<h1>Users</h1>
<table id="viewtable">
   <tr>
     <th>ID</th>
     <th>Username</th>
     <th>Email</th>
     <th>Creation Date</th>
     <th>Actions</th>
   </tr>
   <?php
      foreach($users as $value){
       $date = date('Y-m-d', strtotime($value['registrationdate']));
       echo "<tr>";
       echo "<td>$value[id]</td>";
       echo "<td>$value[username]</td>";
       echo "<td>$value[email]</td>";
       echo "<td>$date</td>";
       echo "<td class='actionsC'><a href='?page=users&edit=$value[id]'><div class='crudB editB'><i class='fa-solid fa-pen'></i></div></a><a href='?page=users&delete=$value[id]'><div class='crudB deleteB'><i class='fa-solid fa-trash-can'></i></div></a></td>";
       echo "</tr>";
   }
   ?>
</table>
<?php
  }
}
?>