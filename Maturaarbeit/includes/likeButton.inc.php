<?php
  $userID = $_SESSION['id'];
  $likeCheck = "SELECT * FROM likes WHERE userID='$userID' AND actID='$actid'";
  $resultLikes = $conn->query($likeCheck);
  $rowLikes = $resultLikes->fetch_assoc();
  $liked = $resultLikes->num_rows;
?>
<div class="likeButton" id="likeButton">
  <?php
    if($liked>0){
      echo "<button type='button' onclick='unlike(".$actid.")'>Gefällt mir nicht mehr</button>";
    }else{
      echo "<button type='button' onclick='like(".$actid.")'>Gefällt mir</button>";
    }
  ?>
</div>
<script src="node_modules\jquery\dist\jquery.js"></script>
<script>
  function like(actid){
    $.ajax({
      type:'post',
      url:'includes/like.inc.php',
      datatype: 'json',
      data: {
        userID: '<?php echo $userID; ?>',
        actID: actid
      },
      complete: function(){
        $('#likeButton').html("<button type='button' onclick='unlike("+actid+")'>Gefällt mir nicht mehr</button>");
      },
    });
    return false;
  }
  function unlike(actid){
    $.ajax({
      type:'post',
      url:'includes/unlike.inc.php',
      datatype: 'json',
      data: {
        userID: '<?php echo $userID; ?>',
        actID: actid
      },
      complete: function(){
        $('#likeButton').html("<button type='button' onclick='like("+actid+")'>Gefällt mir</button>");
      }
    });
    return false;
  }
</script>