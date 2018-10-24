<!DOCTYPE html>
<html>
    <head>
        <title>Book Detail</title>
        <link rel="stylesheet" type="text/css" href="statics/css/home.css">
    </head>
    <body>
        <?php setvar('page', 'browse'); embed("main-bar"); ?>
        <div id="main">
            <figure>
                <img id="cover" src=<?php getvar('cover'); ?>>
                <figcaption class="caption"><?php getvar('rating'); ?>/5.0</figcaption>
            </figure>
            <div>
                <h3><?php getvar('title'); ?></h3>
                <span class="author"><?php getvar('author'); ?></span>
                <span class="detail"><?php getvar('detail'); ?></span>
            </div>
            <div class="order">
                <span class="subheading">Order</span>
                <form method="POST">
                    <span class="jumlah">Jumlah :</span>
                    <select id='orderamount' name="orderamount">
                        <?php
                            for ($i=1;$i<=100;$i++) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <button id="btn-order" class="btn-primary" type="button" required onclick="startOrder(<?php getvar('id'); ?>)">Order</button>
                </form>
            </div>
            <div class="review">
                <span class="subheading">Reviews</span>
                <?php
                    if ($reviews[0]['profilepic'] != 'foo'){
                        foreach ($reviews as $item) {
                            ?>
                            <table class="reviews">
                                <td class="profile_picture"><img src=<?php echo $item['profilepic']; ?>></td>
                                <td class="comments">
                                    <span class="username">@<?php echo $item['username']; ?></span>
                                    <span class="comment"><?php echo $item['reviewcomment']; ?></span>
                                </td>
                                <td class="ratings"><p><?php echo $item['rating']; ?>/5.0</p></td>
                            </table>
                            <?php
                        }
                    } 
                ?>                
            </div>
        </div>
    </body>
    <script src="statics/js/ajax.js"></script>
    <script type="text/javascript">

        function startOrder(id){
            var sel = document.getElementById('orderamount');
            var value = sel.options[sel.selectedIndex].value;
            
            var data = {};
            data['orderandid'] = value.toString()+"."+id;

            let ajax = {};
            ajax = requestPost(
                'book_detail.php',
                data,
                function(result) {
                    console.log(typeof result);
                    console.log(result);
                    showNotification(result.data.orderid);
                }
            );
        }

        function showNotification(id){
            window.alert('Pemesanan Berhasil!\nNomor Transaksi : '+id);
        }

    </script>
</html>