<?php
include_once(__DIR__."/classes/User.php");
include_once(__DIR__."/classes/Comment.php");
$allComments = Comment::getAllComments(3);


    session_start();
    if(isset($_SESSION)){
        try{
            echo "Welcome " . $_SESSION['username'];
            //alle users loopen
            //users uit getAll() functie
        }
        catch(\Throwable $e){
        $error = $e->getMessage();
    }}
    else {
        header ("location:login.php");
    }

    //if statements rond bv veldje description vna projecten
    //feature 11 zoals yt videos, id mee geven in route (get)
    //feature AJAX, query die ik die op test van email al gebruikt, dan via ajax doen

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="CSS/Index.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoreTechTips</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div>
       <nav>
<<<<<<< HEAD
           <div class="flex-home">
             <a class= "home" href="">Home</a>
           </div>
           <div class="flex-search">
            <p class="search">Search</p>
           </div>
           <div class="flex-login">
             <a class="login" href="">Log me in</a>
             <a class="signup" href="">Sign Up</a>
           </div>
       </nav>
       
=======
            <p class="search">search</p>
            <a class= "http://localhost/php/more-techtips/index.php" href="">Home</a>
            <a href="http://localhost/php/more-techtips/profile.php">My profile</a>
            <a href="http://localhost/php/more-techtips/upload.php">Upload</a>
            <a class= "reset" href="resetPW.mail.php">Reset Password</a>
       </nav>
       <div>
           <div>
                <div>
                    <img src="https://memegenerator.net/img/instances/52441577.jpg" alt="">

                    <input type="text" id="commentText" placeholder="What do you think of this project?">
                    <a href="#" id="btnAddComment" data-postid="3">Add comment</a>
                    <?php if(isset($error)): ?>
                        <div class="error"><?php echo $error; ?></div>
                    <?php endif; ?>
                </div>
                <ul class="post__comments__list">
                    <?php foreach($allComments as $c):?>
                        <li><?php echo $c['text']; ?></li>
                    <?php endforeach; ?> 
                </ul>

           <?php foreach($users as $user): ?>
                <h2><?php echo $user['username']; ?></h2>
            <?php endforeach; ?>
           </div>
       <a href="http://localhost/php/more-techtips/logout.php">Log out</a>
       <script src="app.js"></script>
    </div>
>>>>>>> 12a356b3b38c4882c5a594b19d8c27506b9e2268
   </div>
   <img src="https://memegenerator.net/img/instances/52441577.jpg" alt="">
</body>
</html>