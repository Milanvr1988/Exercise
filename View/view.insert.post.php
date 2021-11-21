<?php require "Partials/header.php"; ?>

<div class="jumbotron">
    <h3>Insert Post</h3>
    <div class="row">
        <div class="container-sm">
            <?php if($post->alertPost): ?>
                <div class="alert alert-primary" role="alert">
                    Uspesno unet Post
                </div>
            <?php endif; ?>
            <form action="posts.php" method="post"  enctype="multipart/form-data">
                <input type="text" name="insert_title" placeholder="text"><br><br>
                Unesi sliku <input type="file" name="insert_picture" ><br><br>
                <textarea name="insert_description" id="" cols="30" rows="15" placeholder="description"></textarea><br><br>
                <button type="submit" name="insert_save">Update</button>
            </form>
        </div>
    </div>
</div>

<?php require "Partials/footer.php"; ?>
