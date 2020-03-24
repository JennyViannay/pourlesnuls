
<?php 

    include('../includes/head.php'); 
    if(isset($_POST)){
        if(!empty($_POST['email'] && !empty($_POST['password']))){
            $email = $_POST['email'];
            // redirection vers la page articles.php 
            header('Location: http://localhost:8000/pages/articles.php');
        } else {
            // stocker une erreur "Les champs email et password sont obligatoires."
            $errors = "Les champs email et password sont obligatoires.";
        }
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