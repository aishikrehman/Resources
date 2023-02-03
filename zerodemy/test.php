<?php
$blogId = 'YOUR-BLOG-ID';
$apiKey = 'YOUR-API-KEY';
$label = 'YOUR-LABEL-NAME';

$posts = json_decode(file_get_contents("https://www.googleapis.com/blogger/v3/blogs/$blogId/posts?key=$apiKey&labels=$label"));

foreach ($posts->items as $post) {
    echo '<h2><a href="' . $post->url . '">' . $post->title . '</a></h2>';
    echo '<p>' . $post->content . '</p>';
}
?>
