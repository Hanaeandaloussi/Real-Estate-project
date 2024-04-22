<?php
include '../components/connect.php';

session_start(); // Start the session if you're using sessions to handle logins

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   header('location:login.php');
   exit(); // Make sure to exit here to stop further script execution after a redirect
}

if (isset($_POST['delete']) && isset($_POST['delete_id'])) {
   $delete_id = filter_var($_POST['delete_id'], FILTER_SANITIZE_STRING);

   // Prepare statement for deletion query
   $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ? AND receiver = ?");
   $delete_message->execute([$delete_id, $user_id]);

   if ($delete_message->rowCount() > 0) {
      $success_msg[] = 'Message deleted!';
   } else {
      $warning_msg[] = 'No such message found or message already deleted!';
   }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Messages</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
   <?php include '../components/user_header.php'; ?>

   <section class="grid">
      <h1 class="heading">Messages</h1>
      <form action="" method="POST" class="search-form">
         <input type="text" name="search_box" placeholder="search messages..." maxlength="100" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>
      <div class="box-container">
         <?php
         $query = "SELECT * FROM `messages` WHERE receiver = ?";
         if (!empty($_POST['search_box'])) {
            $query .= " AND message LIKE ?";
            $params = [$user_id, '%' . $_POST['search_box'] . '%'];
         } else {
            $params = [$user_id];
         }
         $select_messages = $conn->prepare($query);
         $select_messages->execute($params);

         if ($select_messages->rowCount() > 0) {
            while ($message = $select_messages->fetch(PDO::FETCH_ASSOC)) {
               echo "<div class='box'>";
               echo "<p>name: <span>{$message['name']}</span></p>";
               echo "<p>email: <a href='mailto:{$message['email']}'>{$message['email']}</a></p>";
               echo "<p>number: <a href='tel:{$message['number']}'>{$message['number']}</a></p>";
               echo "<p>message: <span>{$message['message']}</span></p>";
               echo "<form action='' method='POST'>";
               echo "<input type='hidden' name='delete_id' value='{$message['id']}'>";
               echo "<input type='submit' value='delete message' onclick='return confirm(\"delete this message?\");' name='delete' class='delete-btn'>";
               echo "</form>";
               echo "</div>";
            }
         } else {
            echo '<p class="empty">No messages found!</p>';
         }
         ?>
      </div>
   </section>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <script src="../js/admin_script.js"></script>
   <?php include '../components/message.php'; ?>
</body>

</html>