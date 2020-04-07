<?php
session_start();
include('../includes/head.php');
require_once '../connec.php';

if ($_SESSION['isConnected'] == false) {
    header('Location: http://localhost:8000');
}

$pdo = new PDO(DSN,USER,PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// READ ALL ARTICLE
$query = "SELECT * FROM article ORDER BY title DESC";
try {
    $statement = $pdo->query($query);
    $articles = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $event){
    $error = $event->getMessage();
}


// CREATE ARTICLE 
if (isset($_POST) && !empty($_POST)){
    if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content']) && !empty($_POST['img'])) {
        try{
            $request = $pdo->prepare("INSERT INTO article (title, author, img, content) VALUES (:title, :author, :img, :content)");
            $request->execute([
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'img' => $_POST['img'],
                'content' => $_POST['content']
            ]);
        } catch (PDOException $event){
            $error = $event->getMessage();
        }
    }
}

// DELETE
// DELETE FROM article WHERE id = ? 
if(isset($_GET['id']) && !empty($_GET['id'])){
    try{
    $request = $pdo->prepare("DELETE FROM article WHERE id = :id ");
    $request->execute([
        'id' => $_GET['id']
    ]);
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

<div class="container">
    <div class="row">
        <?php foreach ($articles as $article) { ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= $article['img'] ?>" class="card-img-top" alt="<?= $article['img'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['title'];?></h5>
                    <p class="card-text"><?php echo $article['content'];?></p>
                    <p><?php echo $article['author'];?></p>
                    <p><a href="<?= "articles.php?id=".$article['id'] ?>" class="btn btn-danger">Delete</a></p>
                    <p><a href="<?= "update.php?id=".$article['id'] ?>" class="btn btn-success">Edit</a></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="text" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="create">Create</button>
    </form>
</div>
