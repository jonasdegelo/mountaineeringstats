<div class="profileheader">
  <a href="profile.php"><img class="circle" src="<?php echo $profilepic;?>" height="120" width="120"></a>
  <?php
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userID = $row['id'];
    $username = $row['username'];
  ?>
  <h1 class="username"><?php echo $username; ?></h1>
  <?php
    include 'includes/followerNumbers.inc.php';
  ?>
  <a href='settings.php'><img src="icons/gear.png" height="24" width="24"></a>
  <a href='profileinfo.php'><img src="icons/info.png" height="24" width="24"></a>

  <div class="bio">

  </div>
</div>