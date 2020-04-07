<?php
session_start();
include('../includes/head.php');
require_once '../connec.php';

if ($_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8000');
}

$pdo = new PDO(DSN,USER,PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    // READ ONE ARTICLE
    $query = "SELECT * FROM article WHERE id = $id";
    try {
        $statement = $pdo->query($query);
        $article = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $event){
        $error = $event->getMessage();
    }
}

if(isset($_POST) && !empty($_POST)){
    try {
        $query = $pdo->prepare("UPDATE article SET title=:title, author=:author, img=:img, content=:content WHERE id=:id;");
        $query->execute([
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'img' => $_POST['img'],
            'content' => $_POST['content'],
            'id' => $_GET['id']
        ]);
        header('Location: http://localhost:8000/pages/articles.php');
    }
    catch(PDOException $event){
        $error = $event->getMessage();
    }
}

// Gestion d'erreurs
if(isset($error) && !empty($error)){
    echo $error;
}
    
?>

<form method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $article['title'] ?>">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" value="<?= $article['author'] ?>">
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="text" class="form-control" id="img" name="img" value="<?= $article['img'] ?>">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content"><?= $article['content'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
