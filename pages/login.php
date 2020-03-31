<?php 
    session_start();
    include('../includes/head.php');
    include('../controller.php'); 
    
    if(isset($_POST['submit'])){
        getAutentification($_POST);
    }
?>

<div class="container">
    <h1>
        <?php
            if(isset($errors)){
                echo $errors;
            }
        ?>

    </h1>
    <form method="POST">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>