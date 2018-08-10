<?PHP
session_start();
$CON=mysqli_connect("localhost","vivjaols_game","pVS)-Ui_bg[w","vivjaols_game");

if(isset($_POST['SUBMIT']))
{
    $USER_NAME=$_POST['NAME'];
     $NAME=str_replace(' ','',$USER_NAME);
    
    $NAME_CHECK=preg_match("/^[a-zA-Z]+[a-zA-Z0-9_ ]*$/",$NAME);
   
    if($NAME_CHECK)
    {
    
     $RAND=rand(100,999);
    $LOWER_NAME=strtolower($NAME);
   
    $GAME_TABLE_NAME=$LOWER_NAME.$RAND;
    $_SESSION['GAME']=$GAME_TABLE_NAME;
    $CREATE_TABLE_GAME="CREATE TABLE $GAME_TABLE_NAME (ID int(250) AUTO_INCREMENT PRIMARY KEY ,NO int(250) NOT NULL)";
   mysqli_query($CON,$CREATE_TABLE_GAME);    
    $USER="user";
    $USER_TABLE=$LOWER_NAME.$USER.$RAND;
    $_SESSION['USER_COMPUTER']=$USER_TABLE;
     $CREATE_TABLE_USER_COMPUTER="CREATE TABLE $USER_TABLE (ID int(250) AUTO_INCREMENT PRIMARY KEY ,USER int(250) NOT NULL,COMPUTER int(250) NOT NULL)";
     mysqli_query($CON,$CREATE_TABLE_USER_COMPUTER);
     $_SESSION['USERNAME']=$USER_NAME;
  HEADER("location:https://www.vivja.com/2");
  exit();
    }
    else{
        echo "<CENTER><H1>ENTER VALID USER NAME</H1></CENTER>";
    }
}
?>
<html>
      <head>
 <link rel="icon" type="image/png" href="https://www.vivja.com/photos/VJ.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<img src="https://www.vivja.com/photos/vivja_game.png" id="vivja_game">
<STYLE>
#vivja_game{
    margin-top:-45em;
}
#NAME{
    WIDTH:600PX;
    HEIGHT:100PX;
}
#SUBMIT{
    WIDTH:180PX;
    HEIGHT:100PX;
    background-color:#0080ff;
    
}
@media only screen and (max-width:700px)
{
    #SUBMIT{
    WIDTH:500PX;
    HEIGHT:100PX;
    background-color:#0080ff;
    
}
    #NAME{
        border:solid black;
    WIDTH:500PX;
    HEIGHT:100PX;
    
     box-shadow:0 80px 100px 0 rgba(0,0,0,0.06),0 0 100px 0 rgba(0,0,0,0);
}
}
</STYLE>
</br></br>
<CENTER>
    <H1><B><FONT SIZE="10" COLOR="RED">G A M E</FONT></BR>
        <FONT SIZE="9" COLOR="RED">T I C__T A C__T O E</FONT></br>ENTER YOUR NAME </B></H1>
<form action="" METHOD="POST"><font size="9" >
<INPUT TYPE="TEXT" NAME="NAME" style="color:red;" ID="NAME" REQUIRED PLACEHOLDER="ENTER YOUR NAME"></font></br><font size="6"><INPUT TYPE="SUBMIT" style="color:white;" name="SUBMIT"value="CONTINUE"ID="SUBMIT"></font>
    </FORM>
    <A HREF="#NAME">
    <img src="https://www.vivja.com/photos/tic_tac_toe.png" />
    </A>
    </html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    