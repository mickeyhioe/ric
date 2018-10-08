<!-- Related Posts -->
<div class="related-posts">
<?php
    $posts = array(
        array(
            'cat'   => "Report",
            'date'  => "07.2018",
            'title' => "GORD MILLER: STAYING THE COURSE",
        ),
        array(
            'cat'   => "Report",
            'date'  => "06.2018",
            'title' => "IMPACT ASSESSMENT OF CLEAN FUEL",
        ),
        array(
            'cat'   => "Report",
            'date'  => "05.2018",
            'title' => "ECOFISCAL REPORT CORRECTION",
        ),
    );
    foreach(array_keys($posts) as $num):
        $category = $posts[$num]['cat'];
        $date = $posts[$num]['date'];
        $title = $posts[$num]['title'];
?>

    <div class="related-posts-item">
        <a href="single.php" class="post-content">
            <div class="post-content-bg" style="background-image: url(https://picsum.photos/600/300?image=<?php echo rand(600, 1000)?>);"></div>
            <span class="post-category"><?php echo $category;?></span>
            <span class="post-date"><?php echo $date;?></span>
            <span class="h5 post-title"><?php echo $title;?></span>
        </a>
    </div>

<?php endforeach;?>
</div>
<!-- /Related Posts -->