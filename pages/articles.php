<?php include('../includes/head.php'); 
 
    $articles = [
        "1" => [
            "title" => "Mon premiers article",
            "author" => "Johnny",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus ante tellus, maximus molestie lorem aliquet a. Duis nunc ante, sollicitudin vitae augue a, dapibus pretium massa. Pellentesque ut ipsum sit amet nulla ullamcorper placerat. Integer odio mauris, volutpat at leo quis, porttitor consequat dui."
        ],
        "2" => [
            "title" => "Mon deuxieme article",
            "author" => "Jules",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus ante tellus, maximus molestie lorem aliquet a. Duis nunc ante, sollicitudin vitae augue a, dapibus pretium massa. Pellentesque ut ipsum sit amet nulla ullamcorper placerat. Integer odio mauris, volutpat at leo quis, porttitor consequat dui."
        ],
        "3" => [
            "title" => "Mon troisieme article",
            "author" => "Sandrine",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus ante tellus, maximus molestie lorem aliquet a. Duis nunc ante, sollicitudin vitae augue a, dapibus pretium massa. Pellentesque ut ipsum sit amet nulla ullamcorper placerat. Integer odio mauris, volutpat at leo quis, porttitor consequat dui."
        ],
        "4" => [
            "title" => "Mon quatrieme article",
            "author" => "Varapone",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus ante tellus, maximus molestie lorem aliquet a. Duis nunc ante, sollicitudin vitae augue a, dapibus pretium massa. Pellentesque ut ipsum sit amet nulla ullamcorper placerat. Integer odio mauris, volutpat at leo quis, porttitor consequat dui."
        ]
    ]
?>

<div class="container">
    <div class="row"> 
        <?php foreach ($articles as $article) { ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article['title'];?></h5>
                        <p class="card-text"><?php echo $article['content']; ?></p>
                        <p><?php echo $article['author']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php include('../includes/footer.php'); ?>
