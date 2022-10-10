<?php
include "connect.php";
include_once('seo_friendly.php');
?>
<!doctype html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="ajax.js"></script>
    </head>
    <body>
        <div class="container">

            <?php

            $rowperpage = 3;
            $allcount_query = "SELECT count(*) as allcount FROM posts";
            $allcount_result = mysqli_query($conn,$allcount_query);
            $allcount_fetch = mysqli_fetch_array($allcount_result);
            $allcount = $allcount_fetch['allcount'];

            $query = "select * from posts order by id asc limit 0,$rowperpage ";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($result)){

                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $shortcontent = substr($content, 0, 160)."...";
                $link = $row['url'];
                $imgw= $row['image'];
            ?>
                <div class="post" id="post_<?php echo $id; ?>">
                    <?php echo "<img src='./admin/photo/$row[image]' width='200px' height='200px'/>";?>
                    <h1><?php echo $title; ?></h1>
                    <p>
                        <?php echo $shortcontent; ?>
                    </p>
                    <a href="<?php echo $link; ?>" class="more" target="_blank">Chi tiết</a>
                </div>

            <?php
            }
            ?>

            <h1 class="load-more" style="color:red">Xem thêm</h1>
            <input type="hidden" id="row" value="0">
            <input type="hidden" id="all" value="<?php echo $allcount; ?>">
            
        </div>
    </body>
</html>