<?php
   
    session_start();
    include("connection.php");

    $vote = $_POST['gvote'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['id'];

    $update_votes = mysqli_query($connect, "update user set vote='$total_votes' where id='$gid'");
    $update_status = mysqli_query($connect, "update user set status=1 where id='$uid'");

    if($update_status and $update_votes){
        $getCandidate = mysqli_query($connect, "select name, photo, vote, id from user where role=2 ");
        $candidate = mysqli_fetch_all($getCandidate, MYSQLI_ASSOC);
        $_SESSION['candidate'] = $candidate;
        $_SESSION['status'] = 1;
        echo '<script>
                    alert("Voting successfull!");
                    window.open( "./voting.php", _self);
                </script>';
    }
    else{
        echo 
                    "Voting failed!.. Try again.";
    }
?>
    
