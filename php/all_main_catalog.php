<?php

require_once "pass_with_db.php";

$conn = mysqli_connect($db_host, $db_user, $db_pass, "$db_name");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
        
$sql = "SELECT artic, name, name_model, text,  price, img, s_1, length_1, volume_1, s_2, length_2, volume_2, s_3, length_3, volume_3, s_4, length_4, volume_4, s_5, length_5, volume_5, s_6, length_6, volume_6, s_7, length_7, volume_7, s_8, length_8, volume_8, s_9, length_9, volume_9, s_10, length_10, volume_10 
        FROM ".$_catalog_."";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

while ($row = mysqli_fetch_assoc($result)) {
?>

    <div class="wrap-product">
        <a class="a" href="#<?php echo $row["artic"]; ?> "><img src=" <?php echo $row["img"]; ?> " width="200" height="170">
        <div class="name-product"> <?php echo $row["name"]; ?> </div>
        <div class="buy"><span class="buy-num"> <?php echo $row["price"]; ?> </span> грн</div>
        <div class="loopa"><i class="fa fa-search fa-2x" aria-hidden="true"></i></div></a>
    </div>

    <div id="<?php echo $row["artic"]; ?>" class="modalDialog">
        <div class="wrap-descript product">
            <a href="#close" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            <div class="photo">
                <img class="img-photo product__image" src=" <?php echo $row["img"]; ?> ">
            </div>
            <div class="wrap-text">
                <div class="name-prod-mod product__name"> <?php echo $row["name_model"]; ?> </div>
                <p>Описание:</p>
                <p class="p-mod"> <?php echo $row["text"]; ?> </p>
                <div class="price product__price"> <?php echo $row["price"]; ?>  грн</div>
                <table>
                    <tr>
                        <td class="td_artic">Артикул:</td>
                        <td class="td_artic">Длина спины:</td>
                        <td class="td_artic">Обхват груди:</td>
                    </tr>
                    <tr>
                        <td class="td_buy">
                            <?php
                            if ($row["s_1"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_1"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_1"]."</button><br><br>";
                            }
                            if ($row["s_2"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_2"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_2"]."</button><br><br>";
                            }
                            if ($row["s_3"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_3"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_3"]."</button><br><br>";
                            }
                            if ($row["s_4"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_4"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_4"]."</button><br><br>";
                            }
                            if ($row["s_5"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_5"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_5"]."</button><br><br>";
                            }
                            if ($row["s_6"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_6"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_6"]."</button><br><br>";
                            }
                            if ($row["s_7"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_7"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_7"]."</button><br><br>";
                            }
                            if ($row["s_8"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_8"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_8"]."</button><br><br>";
                            }
                            if ($row["s_9"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_9"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_9"]."</button><br><br>";
                            }
                            if ($row["s_10"] == true) {
                                echo "<button class='cart-buy-button' data-name='".$row["artic"]." / ".$row["s_10"]." / ".$row["name"]."' data-price=' ".$row["price"]."' data-quantity='1'><i class='fa fa-shopping-cart  fa-2x' aria-hidden='true'></i>  ".$row["artic"]." / ".$row["s_10"]."</button><br><br>";
                            }
                            ?>
                        </td>
                        <td class="td_size">
                            <?php
                            $spina = "спина";
                            if ($row["length_1"] > 0) {
                                echo $spina." ".$row["length_1"]."<br><br>";
                            }
                            if ($row["length_2"] > 0) {
                                echo $spina." ".$row["length_2"]."<br><br>";
                            }
                            if ($row["length_3"] > 0) {
                                echo $spina." ".$row["length_3"]."<br><br>";
                            }
                            if ($row["length_4"] > 0) {
                                echo $spina." ".$row["length_4"]."<br><br>";
                            }
                            if ($row["length_5"] > 0) {
                                echo $spina." ".$row["length_5"]."<br><br>";
                            }
                            if ($row["length_6"] > 0) {
                                echo $spina." ".$row["length_6"]."<br><br>";
                            }
                            if ($row["length_7"] > 0) {
                                echo $spina." ".$row["length_7"]."<br><br>";
                            }
                            if ($row["length_8"] > 0) {
                                echo $spina." ".$row["length_8"]."<br><br>";
                            }
                            if ($row["length_9"] > 0) {
                                echo $spina." ".$row["length_9"]."<br><br>";
                            }
                            if ($row["length_10"] > 0) {
                                echo $spina." ".$row["length_10"]."<br><br>";
                            }
                            ?>
                        </td>
                        <td class="td_size">
                            <?php
                            $grud = "грудь";
                            if ($row["volume_1"] > 0) {
                                echo $grud." ".$row["volume_1"]."<br><br>";
                            }
                            if ($row["volume_2"] > 0) {
                                echo $grud." ".$row["volume_2"]."<br><br>";
                            }
                            if ($row["volume_3"] > 0) {
                                echo $grud." ".$row["volume_3"]."<br><br>";
                            }
                            if ($row["volume_4"] > 0) {
                                echo $grud." ".$row["volume_4"]."<br><br>";
                            }
                            if ($row["volume_5"] > 0) {
                                echo $grud." ".$row["volume_5"]."<br><br>";
                            }
                            if ($row["volume_6"] > 0) {
                                echo $grud." ".$row["volume_6"]."<br><br>";
                            }
                            if ($row["volume_7"] > 0) {
                                echo $grud." ".$row["volume_7"]."<br><br>";
                            }
                            if ($row["volume_8"] > 0) {
                                echo $grud." ".$row["volume_8"]."<br><br>";
                            }
                            if ($row["volume_9"] > 0) {
                                echo $grud." ".$row["volume_9"]."<br><br>";
                            }
                            if ($row["volume_10"] > 0) {
                                echo $grud." ".$row["volume_10"]."<br><br>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
<?php } 

    // echo '<script type="text/javascript">';
    // echo '    console.log(document.querySelector(".modalDialog"));';
    // echo '    console.log("TEST");';
    // echo '</script>';
?>
