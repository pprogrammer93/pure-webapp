<!DOCTYPE html>
<html>
    <head>
        <title>Search Result</title>
        <link rel="stylesheet" type="text/css" href="statics/css/home.css">
    </head>
    <body>
        <?php setvar('page', 'browse'); embed("main-bar"); ?>
        <div id="main">
            <span class="searchresult">Search Result</span>
            <span class="numberofresult">
                Found <?php 
                    echo '<p>'.$numberofresults.'</p>';
                ?> result(s)
            </span>
            <div>
                <?php
                    if($numberofresults != 0) { 
                        foreach ($books as $item) {
                    ?>
                            <table class="results">
                                <td class="cover"><img src=<?php echo $item['cover']; ?>></td>
                                <td class="about">
                                    <p class="title"><?php echo $item['title']; ?></p>
                                    <p class="author"><?php echo $item['author']; ?> - <?php echo $item['rating'] ?>/5.0 (<?php echo $item['numberofvotes']; ?> votes)</p>
                                    <p class="detail"><?php echo $item['detail']; ?></p>
                                </td>
                            </table>
                            <button id="btn-detail" class="btn-primary" onclick="window.location.href='book_detail.php?book_id=<?php echo $item['id']; ?>';">Detail</button>
                    <?php
                        }
                    }
                ?>  
            </div>
        </div>
    </body>
</html>