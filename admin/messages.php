<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
   if(isset($_GET['delete'])){
       $deleteid = $_GET['delete'];
       $message->deleteMessage($deleteid);
   }
$messages = $message->getAllMessages();
?>
 <h1>Messages</h1>
 <table id="viewtable">
   <tr>
     <th>ID</th>
     <th>Full Name</th>
     <th>Email</th>
     <th>Subject</th>
     <th>Message</th>
     <th>Creation Date</th>
     <th>Actions</th>
   </tr>
   <?php 
   foreach($messages as $value){
       $date = date('Y-m-d', strtotime($value['creationdate']));
       echo "<tr>";
       echo "<td>$value[id]</td>";
       echo "<td>$value[fullname]</td>";
       echo "<td>$value[email]</td>";
       echo "<td>$value[subject]</td>";
       echo "<td>$value[message]</td>";
       echo "<td>$date</td>";
       echo "<td class='actionsC'><a href='?page=messages&delete=$value[id]'><div class='crudB deleteB'><i class='fa-solid fa-trash-can'></i></div></a></td>";
       echo "</tr>";
   }
   ?>
 </table>
<?php
}
?>