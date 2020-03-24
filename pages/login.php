<?php include('../includes/head.php'); ?>

<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <textarea type="password" class="form-control" id="password" name="message"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>