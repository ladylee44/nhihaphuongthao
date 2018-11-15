<?php
// messege page where secretly sent and recieved messages shown

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Messages</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
</script>
<link rel="icon" href="icon.ico">
<style>
body{
    font-family: sans-serif;
    background: #e9ebee;
    padding: 0;
    margin: 0;
}
.tabs{
    display: inline-block;
    background: #f2f2f2;
    width: 49.935%;
    border: 0.1px solid #cccccc;
    text-align: center;
    height: 20px;
    font-size: 25px;
    font-family: sans-serif;
    font-weight: 700;
    line-height:0.75;
    color: #444444;
    padding: 20px 0px;
}

.tabs:hover{
    cursor: pointer;
}
#receive_tab{
    float: left;
    background: #cccccc;
}
#sent_tab{
    float: right;
}
.noresult{
    text-align: center;
}
#receive{
    padding: 20px;
    display: inline-block;
    text-align:center;
}
#send{
    display: none;
    padding: 20px;
    text-align:center;
}
.message{
font-size: 14px;
width: 70%;
color: white;
padding: 8px;
border-radius: 10px;
background: #00a4fc;
}
h1{
    display: block;
}
.message_btn{
    display: block;
    margin-bottom: 10px;
    background: #00a4fc;
    width: 40%;
    color: white;
    text-decoration: none;
    font-size: 16px;
    border-radius: 10px;
}
.message_btn:hover{
    background: #04a4dc;
}
</style>
</head>
<?php
require'database.php';
$email = $_SESSION['email'];
$receive = "SELECT * FROM secret WHERE receiver='$email' ORDER BY id DESC";
$result_receive = $mysqli->query($receive);
$send = "SELECT * FROM secret WHERE sender='$email' ORDER BY id DESC";
$result_send = $mysqli->query($send);
?>
<body>
    
    <center>
    <h1>Messages</h1>
    <a class="message_btn" href="type_msg" style="top: 100px; padding: 20px 5px;">Type a Message</a>
    </center>
    
    <div>
    <div class="tabs" id="receive_tab">Received</div>
    <div class="tabs" id="sent_tab">Sent</div>
    </div>
    <div id="receive" style="height: 400px; width: 90%;" >
        <center>
    <?php
    if(mysqli_num_rows($result_receive) > 0){
    while($row = mysqli_fetch_assoc($result_receive)){
        echo "<p class=message>".$row['message']."</p>";
    }
    } else {
        echo "<p class=noresult>No messages received</p>";
    }
    ?>
    </center>
    </div>
    <div id="send" style="height: 400px; width: 90%;" >
        <center>
    <?php
    if(mysqli_num_rows($result_send) > 0){
    while($row = mysqli_fetch_assoc($result_send)){
        echo "<p class=message>".$row['message']."</p><br>";
    }
    } else {
        echo "<p class=noresult>No messages sent</p>";
    }
    ?>
    </center>
    </div>
<script>
    $(document).ready(function(){
        $('#receive_tab').click(function(){
            $('#receive').css('display','inline-block');
            $('#send').css('display','none');
            $('#receive_tab').css('background','#cccccc');
            $('#sent_tab').css('background','#f2f2f2');
        });
        $('#sent_tab').click(function(){
            $('#receive').css('display','none');
            $('#send').css('display','inline-block');
            $('#receive_tab').css('background','#f2f2f2');
            $('#sent_tab').css('background','#cccccc');
        });
    });
</script>
</body>
</html>