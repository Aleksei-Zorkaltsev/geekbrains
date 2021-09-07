<h2>CategoryName: <?=$category?></h2>

<?php foreach ($newsList as $news): ?>
    <div>
        <a href="<?=route('news.show', ['id' => $news['id']])?>">
            <?=$news['title']?>
        </a>
        <p> <?=$news['id']?> </p>
        <p>author: <?=$news['author']?></p>
        <p>created_at: <?=$news['created_at']?></p>
    </div>
<?php endforeach;?>
