<?php

// configuration
include 'connect.php';

$row = $_POST['row'];
$rowperrow = 3;

// selecting posts
$query = 'SELECT * FROM posts limit '.$row.','.$rowperrow;
$result = mysqli_query($conn,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $shortcontent = substr($content, 0, 160)."...";
    $link = $row['url'];
    $img = $row['image'];

    // Creating HTML structure
    $html .= '<div id="post_'.$id.'" class="post">';
    $html .= '<img src="./admin/photo/' .$img.'"width=200px height=200px"/>';
    $html .= '<h1>'.$title.'</h1>';
    $html .= '<p>'.$shortcontent.'</p>';
    $html .= '<a href="'.$link.'" class="more" target="_blank">More</a>';
    $html .= '</div>';

}

echo $html;
