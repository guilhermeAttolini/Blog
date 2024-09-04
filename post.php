<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex asperiores et eius. Iure quam alias laudantium tempora. Vero repellendus, corrupti neque perferendis provident temporibus alias! Autem voluptatem ipsam repudiandae quaerat.
            Quas, saepe harum deserunt culpa quae odit soluta suscipit eveniet obcaecati eum voluptas perspiciatis in et dolore accusantium nulla id distinctio? Neque totam culpa enim sed laboriosam vitae vel? Alias!
            Beatae assumenda doloremque, expedita facilis ex sed nemo quia cumque vel, inventore accusantium eos dolore, nostrum ut dicta culpa dignissimos. Natus cum aliquid architecto tempora obcaecati ipsum, ex nobis atque?
            Earum dolorum delectus labore rem veritatis laudantium debitis illo ea reprehenderit perferendis incidunt quae iste quas autem impedit, itaque, doloremque distinctio obcaecati suscipit. Illum porro molestias nisi sequi dolores quibusdam.
            Perspiciatis labore nisi repellendus molestias explicabo reprehenderit officia minus dignissimos tempore? Tempora, at sed, consequuntur assumenda sunt perspiciatis aliquid nam quam optio suscipit vel reiciendis, laborum vero obcaecati vitae perferendis.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex asperiores et eius. Iure quam alias laudantium tempora. Vero repellendus, corrupti neque perferendis provident temporibus alias! Autem voluptatem ipsam repudiandae quaerat.
            Quas, saepe harum deserunt culpa quae odit soluta suscipit eveniet obcaecati eum voluptas perspiciatis in et dolore accusantium nulla id distinctio? Neque totam culpa enim sed laboriosam vitae vel? Alias!
            Beatae assumenda doloremque, expedita facilis ex sed nemo quia cumque vel, inventore accusantium eos dolore, nostrum ut dicta culpa dignissimos. Natus cum aliquid architecto tempora obcaecati ipsum, ex nobis atque?
            Earum dolorum delectus labore rem veritatis laudantium debitis illo ea reprehenderit perferendis incidunt quae iste quas autem impedit, itaque, doloremque distinctio obcaecati suscipit. Illum porro molestias nisi sequi dolores quibusdam.
            Perspiciatis labore nisi repellendus molestias explicabo reprehenderit officia minus dignissimos tempore? Tempora, at sed, consequuntur assumenda sunt perspiciatis aliquid nam quam optio suscipit vel reiciendis, laborum vero obcaecati vitae perferendis.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">
                Tags
        </h3>
        <ul class="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li>
                    <a href="#">
                        <?= $tag ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">
            Categorias
        </h3>
        <ul class="categories-list">
            <?php foreach($categories as $category): ?>
                <li>
                    <a href="#">
                        <?= $category ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
    include_once("templates/footer.php");
?>