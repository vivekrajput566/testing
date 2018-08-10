<html>
      <head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<link rel="icon" type="image/png" href="https://www.vivja.com/photos/VJ.png">
</br></br></br></br></br>
    </html>
<?php
session_start();
if(!isset($_SESSION['USERNAME']))
{
    header("location:https://www.vivja.com/tic_tac_toe");
    exit();
}
$USER_NAME=$_SESSION['USERNAME'];


$GAME_TABLE_NAME=$_SESSION['GAME'];

$USER_COMPUER=$_SESSION['USER_COMPUTER'];

$CON=mysqli_connect("localhost","vivjaols_game","pVS)-Ui_bg[w","vivjaols_game");

if(isset($_POST['submit']))
{

	$no=$_POST['no'];

	$SELECT_TABLE_rows=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME");
	$no_row=mysqli_num_rows($SELECT_TABLE_rows);

	if($no_row<8)
	{
		$SELECT_TABLE=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE no='$no' ");
		$check=mysqli_num_rows($SELECT_TABLE);
	if($check==0)
	{
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $GAME_TABLE_NAME (no) values ($no)");
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $USER_COMPUER (USER,COMPUTER) values ($no,0)");

		function computer($rand_no,$no)
		{
		    $GAME_TABLE_NAME=$_SESSION['GAME'];
			$CON=mysqli_connect("localhost","vivjaols_game","pVS)-Ui_bg[w","vivjaols_game");
			$SELECT_TABLE=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE no='$rand_no' ");
	$check=mysqli_num_rows($SELECT_TABLE);
	if($check==0)
	{
	    $USER_COMPUER=$_SESSION['USER_COMPUTER'];
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $GAME_TABLE_NAME (no) values ($rand_no)");
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $USER_COMPUER (USER,COMPUTER) values (0,$rand_no)");

	}
	if($check==1)
	{
		$rand_no=rand(1,9);
		computer($rand_no,$no);
	}



		}
		$rand_no=rand(1,9);
		computer($rand_no,$no);
	}
	elseif($check==1)
	{
		echo"<H1><FONT SIZE='10' COLOR='RED'><CENTER>ALREADY CLIKED!</CENTER></H1>";


	}
	}
	else{
		$SELECT_TABLE=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE no='$no' ");
		$check=mysqli_num_rows($SELECT_TABLE);
	if($check==0)
	{
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $GAME_TABLE_NAME (no) values ($no)");
		$INSERT_DATA=mysqli_query($CON,"INSERT INTO $USER_COMPUER (USER,COMPUTER) values ($no,0)");
	}
	else{
		echo"<H1><FONT SIZE='10' COLOR='RED'><CENTER>ALREADY CLIKED!</CENTER></H1>";
	}
	}
	$SELECT_NO_1=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='1' ");
	$CHECK_NO_1=mysqli_num_rows($SELECT_NO_1);
	$SELECT_NO_2=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='2' ");
	$CHECK_NO_2=mysqli_num_rows($SELECT_NO_2);
	$SELECT_NO_3=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='3' ");
	$CHECK_NO_3=mysqli_num_rows($SELECT_NO_3);
		$SELECT_NO_4=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='4' ");
	$CHECK_NO_4=mysqli_num_rows($SELECT_NO_4);
		$SELECT_NO_5=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='5' ");
	$CHECK_NO_5=mysqli_num_rows($SELECT_NO_5);
		$SELECT_NO_6=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='6' ");
	$CHECK_NO_6=mysqli_num_rows($SELECT_NO_6);
		$SELECT_NO_7=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='7' ");
	$CHECK_NO_7=mysqli_num_rows($SELECT_NO_7);
		$SELECT_NO_8=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='8' ");
	$CHECK_NO_8=mysqli_num_rows($SELECT_NO_8);
		$SELECT_NO_9=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='9' ");
	$CHECK_NO_9=mysqli_num_rows($SELECT_NO_9);
	if(($CHECK_NO_1==1) && ($CHECK_NO_2==1) && ($CHECK_NO_3==1) )
	{
		ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";

echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_4==1) && ($CHECK_NO_5==1) && ($CHECK_NO_6==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";
		
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_7==1) && ($CHECK_NO_8==1) && ($CHECK_NO_9==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";

echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_1==1) && ($CHECK_NO_4==1) && ($CHECK_NO_7==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_2==1) && ($CHECK_NO_5==1) && ($CHECK_NO_8==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";

echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_3==1) && ($CHECK_NO_6==1) && ($CHECK_NO_9==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";
			
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_1==1) && ($CHECK_NO_5==1) && ($CHECK_NO_9==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";

echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_3==1) && ($CHECK_NO_5==1) && ($CHECK_NO_7==1) )
	{
				ECHO "<center><font size='7' color='green'>$USER_NAME YOU WIN</font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
		$SELECT_NO_COMPUTER_1=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='1' ");
	$CHECK_NO_COMPUTER_1=mysqli_num_rows($SELECT_NO_COMPUTER_1);
	$SELECT_NO_COMPUTER_2=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='2' ");
	$CHECK_NO_COMPUTER_2=mysqli_num_rows($SELECT_NO_COMPUTER_2);
	$SELECT_NO_COMPUTER_3=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='3' ");
	$CHECK_NO_COMPUTER_3=mysqli_num_rows($SELECT_NO_COMPUTER_3);
		$SELECT_NO_COMPUTER_4=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='4' ");
	$CHECK_NO_COMPUTER_4=mysqli_num_rows($SELECT_NO_COMPUTER_4);
		$SELECT_NO_COMPUTER_5=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='5' ");
	$CHECK_NO_COMPUTER_5=mysqli_num_rows($SELECT_NO_COMPUTER_5);
		$SELECT_NO_COMPUTER_6=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='6' ");
	$CHECK_NO_COMPUTER_6=mysqli_num_rows($SELECT_NO_COMPUTER_6);
		$SELECT_NO_COMPUTER_7=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='7' ");
	$CHECK_NO_COMPUTER_7=mysqli_num_rows($SELECT_NO_COMPUTER_7);
		$SELECT_NO_COMPUTER_8=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='8' ");
	$CHECK_NO_COMPUTER_8=mysqli_num_rows($SELECT_NO_COMPUTER_8);
		$SELECT_NO_COMPUTER_9=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='9' ");
	$CHECK_NO_COMPUTER_9=mysqli_num_rows($SELECT_NO_COMPUTER_9);
	if(($CHECK_NO_COMPUTER_1==1) && ($CHECK_NO_COMPUTER_2==1) && ($CHECK_NO_COMPUTER_3==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
			
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_COMPUTER_4==1) && ($CHECK_NO_COMPUTER_5==1) && ($CHECK_NO_COMPUTER_6==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_COMPUTER_7==1) && ($CHECK_NO_COMPUTER_8==1) && ($CHECK_NO_COMPUTER_9==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_COMPUTER_1==1) && ($CHECK_NO_COMPUTER_4==1) && ($CHECK_NO_COMPUTER_7==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_COMPUTER_2==1) && ($CHECK_NO_COMPUTER_5==1) && ($CHECK_NO_COMPUTER_8==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_COMPUTER_3==1) && ($CHECK_NO_COMPUTER_6==1) && ($CHECK_NO_COMPUTER_9==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}
	if(($CHECK_NO_COMPUTER_1==1) && ($CHECK_NO_COMPUTER_5==1) && ($CHECK_NO_COMPUTER_9==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
	    
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	}
	if(($CHECK_NO_COMPUTER_3==1) && ($CHECK_NO_COMPUTER_5==1) && ($CHECK_NO_COMPUTER_7==1) )
	{
			ECHO "<center><font size='6' color='red'>$USER_NAME YOU LOSE THIS GAME </font></center></br>";
	
echo" <center>
<form action='' method='post'><font size='6'>
    <input type='submit' STYLE='COLOR:WHITE' name='CONTINUE' value='PLAY AGAIN' ID='CON'/></font>
    </form>
    </center>";
	    
	}

}


?>
<?php
$SELECT_TABLE_1=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='1'");
		$check_1=mysqli_num_rows($SELECT_TABLE_1);
		$SELECT_TABLE_2=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='2'");
		$check_2=mysqli_num_rows($SELECT_TABLE_2);
		$SELECT_TABLE_3=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='3'");
		$check_3=mysqli_num_rows($SELECT_TABLE_3);
		$SELECT_TABLE_4=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='4'");
		$check_4=mysqli_num_rows($SELECT_TABLE_4);
		$SELECT_TABLE_5=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='5'");
		$check_5=mysqli_num_rows($SELECT_TABLE_5);
		$SELECT_TABLE_6=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='6'");
		$check_6=mysqli_num_rows($SELECT_TABLE_6);
		$SELECT_TABLE_7=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='7'");
		$check_7=mysqli_num_rows($SELECT_TABLE_7);
		$SELECT_TABLE_8=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='8'");
		$check_8=mysqli_num_rows($SELECT_TABLE_8);
		$SELECT_TABLE_9=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME WHERE NO='9'");
		$check_9=mysqli_num_rows($SELECT_TABLE_9);

$SELECT_NO_1=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='1' ");
	$CHECK_NO_1=mysqli_num_rows($SELECT_NO_1);
	$SELECT_NO_2=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='2' ");
	$CHECK_NO_2=mysqli_num_rows($SELECT_NO_2);
	$SELECT_NO_3=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='3' ");
	$CHECK_NO_3=mysqli_num_rows($SELECT_NO_3);
		$SELECT_NO_4=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='4' ");
	$CHECK_NO_4=mysqli_num_rows($SELECT_NO_4);
		$SELECT_NO_5=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='5' ");
	$CHECK_NO_5=mysqli_num_rows($SELECT_NO_5);
		$SELECT_NO_6=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='6' ");
	$CHECK_NO_6=mysqli_num_rows($SELECT_NO_6);
		$SELECT_NO_7=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='7' ");
	$CHECK_NO_7=mysqli_num_rows($SELECT_NO_7);
		$SELECT_NO_8=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='8' ");
	$CHECK_NO_8=mysqli_num_rows($SELECT_NO_8);
		$SELECT_NO_9=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE USER='9' ");
	$CHECK_NO_9=mysqli_num_rows($SELECT_NO_9);

		$SELECT_NO_COMPUTER_1=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='1' ");
	$CHECK_NO_COMPUTER_1=mysqli_num_rows($SELECT_NO_COMPUTER_1);
	$SELECT_NO_COMPUTER_2=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='2' ");
	$CHECK_NO_COMPUTER_2=mysqli_num_rows($SELECT_NO_COMPUTER_2);
	$SELECT_NO_COMPUTER_3=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='3' ");
	$CHECK_NO_COMPUTER_3=mysqli_num_rows($SELECT_NO_COMPUTER_3);
		$SELECT_NO_COMPUTER_4=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='4' ");
	$CHECK_NO_COMPUTER_4=mysqli_num_rows($SELECT_NO_COMPUTER_4);
		$SELECT_NO_COMPUTER_5=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='5' ");
	$CHECK_NO_COMPUTER_5=mysqli_num_rows($SELECT_NO_COMPUTER_5);
		$SELECT_NO_COMPUTER_6=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='6' ");
	$CHECK_NO_COMPUTER_6=mysqli_num_rows($SELECT_NO_COMPUTER_6);
		$SELECT_NO_COMPUTER_7=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='7' ");
	$CHECK_NO_COMPUTER_7=mysqli_num_rows($SELECT_NO_COMPUTER_7);
		$SELECT_NO_COMPUTER_8=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='8' ");
	$CHECK_NO_COMPUTER_8=mysqli_num_rows($SELECT_NO_COMPUTER_8);
		$SELECT_NO_COMPUTER_9=mysqli_query($CON,"SELECT * FROM $USER_COMPUER WHERE COMPUTER='9' ");
	$CHECK_NO_COMPUTER_9=mysqli_num_rows($SELECT_NO_COMPUTER_9);
?>
<?php
	$SELECT_TABLE_rows=mysqli_query($CON,"SELECT * FROM $GAME_TABLE_NAME");
	$no_row=mysqli_num_rows($SELECT_TABLE_rows);
if(isset($_POST['CONTINUE']))
{
    $DELETE_DATA_FROM_GAME_TABLE=mysqli_query($CON,"DELETE FROM $GAME_TABLE_NAME");
    
    $DELETE_DATA_FROM_USER_TABLE=mysqli_query($CON,"DELETE FROM $USER_COMPUER");
    header("location:https://www.vivja.com/2");
    exit();
}
?>
<?php if($no_row==9):?>
<center>
<form action="" method="post"><font size="6">
    <input type="submit" STYLE="COLOR:WHITE"name="CONTINUE" value="PLAY AGAIN" ID="CON"/></font>
    </form>
    </center>
<?php endif; ?>
<style>
#CON{
width:400px;
height:100px;
background-color:#0080ff;
    
}
#box{
	float:left;
	margin-left:0em
}
#whole{
	margin-top:0em;
	width:450px;
}
</style>
<center>
 
<div id="whole">
<?PHP if($CHECK_NO_1==1): ?>
<div id="box">
    <STYLE>
#submit_1{
		width:150px;
	height:150px;
	background:url("photos/zero.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="1" name="no" />
<input type="submit" value="" name="submit" id="submit_1"/>
</form>
</div>
<?PHP  endif;?>
<?PHP if($check_1==0): ?>
<div id="box">
<STYLE>
#submit_1{
		width:150px;
	height:150px;
	background:url("photos/b11.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="1" name="no" />
<input type="submit" value="" name="submit" id="submit_1"/>
</form>
</div>
<?PHP  endif;?>
<?PHP if($CHECK_NO_COMPUTER_1==1): ?>
<div id="box">
        <STYLE>
#submit_1{
		width:150px;
	height:150px;
	background:url("photos/mul1.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="1" name="no" />
<input type="submit" value="computer" name="submit" id="submit_1"/>
</form>
</div>
<?PHP  endif;?>
<!--------------------------------------- 2 --------------------->
<?PHP if($CHECK_NO_2==1): ?>
<div id="box">
        <STYLE>
#submit_2{
		width:150px;
	height:150px;
	background:url("photos/zero2.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="2" name="no" />
<input type="submit" value="" name="submit" id="submit_2"/>
</form>
</div>
<?php endif; ?>
<?PHP if($check_2==0): ?>
<div id="box">
<STYLE>
#submit_2{
		width:150px;
	height:150px;
	background:url("photos/b12.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="2" name="no" />
<input type="submit" value="" name="submit" id="submit_2"/>
</form>
</div>
<?php endif; ?>
<?PHP if($CHECK_NO_COMPUTER_2==1): ?>
<div id="box">
        <STYLE>
#submit_2{
		width:150px;
	height:150px;
	background:url("photos/mul2.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="2" name="no" />
<input type="submit" value="" name="submit" id="submit_2"/>
</form>
</div>
<?php endif; ?>
<!-----------------------------------  3 ------------->
<?PHP if($CHECK_NO_3==1): ?>
<div id="box">
           <STYLE>
#submit_3{
		width:150px;
	height:150px;
	background:url("photos/zero3.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="3" name="no" />
<input type="submit" value="" name="submit" id="submit_3"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_3==0): ?>
<div id="box">
<STYLE>
#submit_3{
	width:150px;
	height:150px;
	background:url("photos/b13.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="3" name="no" />
<input type="submit" value="" name="submit" id="submit_3"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_3==1): ?>
<div id="box">
           <STYLE>
#submit_3{
		width:150px;
	height:150px;
	background:url("photos/mul3.png");
    background-size:100% 100%;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="3" name="no" />
<input type="submit" value="" name="submit" id="submit_3"/>
</form></div>
<?PHP endif; ?>
<!--------------------------------   4   ------>
<?PHP if($CHECK_NO_4==1): ?>
<div id="box">
           <STYLE>
#submit_4{
		width:150px;
	height:150px;
	background:url("photos/zero4.png");
    background-size:100% 100%;
 	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="4"  name="no" />
<input type="submit" value="" name="submit"  id="submit_4"/>
</form>
</div>
<?PHP endif; ?>
<?PHP if($check_4==0): ?>
<div id="box">
<STYLE>
#submit_4{
	width:150px;
	height:150px;
	background:url("photos/b14.png");
    background-size:100% 100%;
	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="4"  name="no" />
<input type="submit" value="" name="submit"  id="submit_4"/>
</form>
</div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_4==1): ?>
<div id="box">
           <STYLE>
#submit_4{
		width:150px;
	height:150px;
	background:url("photos/mul4.png");
    background-size:100% 100%;
	margin-top:-1.1em;
    
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="4"  name="no" />
<input type="submit" value="" name="submit"  id="submit_4"/>
</form>
</div>
<?PHP endif; ?>
<!------------------------------------- 5 ------------->
<?PHP if($CHECK_NO_5==1): ?>
<div id="box">
           <STYLE>
#submit_5{
		width:150px;
	height:150px;
	background:url("photos/zero5.png");
    background-size:100% 100%;
    	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="5"  name="no" />
<input type="submit" value="" name="submit" id="submit_5"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_5==0): ?>
<div id="box">
<STYLE>
#submit_5{
	width:150px;
	height:150px;
	background:url("photos/b15.png");
    background-size:100% 100%;
	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="5"  name="no" />
<input type="submit" value="" name="submit" id="submit_5"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_5==1): ?>
<div id="box">
           <STYLE>
#submit_5{
		width:150px;
	height:150px;
	background:url("photos/mul5.png");
    background-size:100% 100%;
    	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="5"  name="no" />
<input type="submit" value="" name="submit" id="submit_5"/>
</form></div>
<?PHP endif; ?>
<!------------------------------------------->
<?PHP if($CHECK_NO_6==1): ?>
<div id="box">
           <STYLE>
#submit_6{
		width:150px;
	height:150px;
	background:url("photos/zero6.png");
    background-size:100% 100%;
    	margin-top:-1.1em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="6" name="no" />
<input type="submit" value=""  name="submit" id="submit_6"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_6==0): ?>
<div id="box">
<STYLE>
#submit_6{
	width:150px;
	height:150px;
	background:url("photos/b16.png");
    background-size:100% 100%;
margin-top:-1.1em;
    
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="6" name="no" />
<input type="submit" value=""  name="submit" id="submit_6"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_6==1): ?>
<div id="box">
           <STYLE>
#submit_6{
		width:150px;
	height:150px;
	background:url("photos/mul6.png");
    background-size:100% 100%;
	margin-top:-1.1em;
    
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="6" name="no" />
<input type="submit" value=""  name="submit" id="submit_6"/>
</form></div>
<?PHP endif; ?>
<!--------------------------------------------->
<?PHP if($CHECK_NO_7==1): ?>
<div id="box">
           <STYLE>
#submit_7{
		width:150px;
	height:150px;
	background:url("photos/zero7.png");
    background-size:100% 100%;
    	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="7" name="no" />
<input type="submit" value="" name="submit" id="submit_7"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_7==0): ?>
<div id="box">
<STYLE>
#submit_7{
	width:150px;
	height:150px;
	background:url("photos/b17.png");
    background-size:100% 100%;
	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="7" name="no" />
<input type="submit" value="" name="submit" id="submit_7"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_7==1): ?>
<div id="box">
           <STYLE>
#submit_7{
		width:150px;
	height:150px;
	background:url("photos/mul7.png");
    background-size:100% 100%;
    	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="7" name="no" />
<input type="submit" value="" name="submit" id="submit_7"/>
</form></div>
<?PHP endif; ?>
<!------------------------------------------->
<?PHP if($CHECK_NO_8==1): ?>
<div id="box">
           <STYLE>
#submit_8{
		width:150px;
	height:150px;
	background:url("photos/zero8.png");
    background-size:100% 100%;
    	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="8" name="no" />
<input type="submit" value="" name="submit" id="submit_8"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_8==0): ?>
<div id="box">
<STYLE>
#submit_8{
	width:150px;
	height:150px;
	background:url("photos/b18.png");
    background-size:100% 100%;
		margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="8" name="no" />
<input type="submit" value="" name="submit" id="submit_8"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_8==1): ?>
<div id="box">
           <STYLE>
#submit_8{
		width:150px;
	height:150px;
	background:url("photos/mul8.png");
    background-size:100% 100%;
    	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="8" name="no" />
<input type="submit" value="" name="submit" id="submit_8"/>
</form></div>
<?PHP endif; ?>
<!------------------------------------------->
<?PHP if($CHECK_NO_9==1): ?>
<div id="box">
           <STYLE>
#submit_9{
		width:150px;
	height:150px;
	background:url("photos/zero9.png");
    background-size:100% 100%;
margin-top:-1.7em;
    
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="9" name="no" />
<input type="submit" value="" name="submit" id="submit_9"/>
</form></div>
<?PHP endif; ?>
<?PHP if($check_9==0): ?>
<div id="box">
<STYLE>

#submit_9{
	width:150px;
	height:150px;
	background:url("photos/b19.png");
    background-size:100% 100%;
	margin-top:-1.7em;
}
</STYLE>
<form action="" method="post">
<input type="hidden" value="9" name="no" />
<input type="submit" value=" " name="submit" id="submit_9"/>
</form></div>
<?PHP endif; ?>
<?PHP if($CHECK_NO_COMPUTER_9==1): ?>
<div id="box">
           <STYLE>
#submit_9{
		width:150px;
	height:150px;
	background:url("photos/mul9.png");
    background-size:100% 100%;
    margin-top:-1.7em;
    }
</STYLE>
<form action="" method="post">
<input type="hidden" value="9" name="no" />
<input type="submit" value="" name="submit" id="submit_9"/>
</form></div>
<?PHP endif; ?>
</div>
