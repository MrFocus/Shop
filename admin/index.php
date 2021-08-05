<?php 
session_start();
if(isset($_SESSION['Username'])){
    header('Location: dashboard.php');
}
include 'init.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hpass    = sha1($password);

    $stmt = $con->prepare("SELECT Username ,Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1");
    $stmt->execute(array($username,$hpass));
    $count = $stmt->rowCount();
    if($count > 0){

        $_SESSION['Username'] = $username;
        header('Location: dashboard.php');
        exit();
    }
}




?>

  

<br>
<br>
<br><style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>

        <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" novalidate="novalidate">
                                        
                    <input type="text" name="user"  placeholder="Username">
                                    
                    <input type="password" name="pass"  placeholder="Password">
                                    
                    <input type="submit" value="Login" class="btn_3"/> 
                                
        </form>



<br>
<br>
<br>


<?php    include  $tpl . 'footer.php'; ?>