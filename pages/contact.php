<?php include('../includes/head.php'); 
    if (isset($_GET)){
        $name = $_GET['name'];
        var_dump($name); //
        $message = $_GET['message'];
        var_dump($message); // 
    }



?>

<div class="container">
    <form method="GET">
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea type="message" class="form-control" id="message" name="message"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>