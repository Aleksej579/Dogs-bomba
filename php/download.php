<?php session_start();
if (!isset($_SESSION['admin'])) die ( '<p><a href="/php/in/index.php">Войти в панель администратора</a></p>');
?>

<?php
require_once "pass_with_db.php";

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$db_select = mysqli_select_db($link, $db_name);
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}

mysqli_query($link, "SET names $db_charset");

//добавления описания ....
$artic = isset($_POST['artic']);
$name = isset($_POST['name']);
$name_model = isset($_POST['name_model']);
$text = isset($_POST['text']);
$price = isset($_POST['price']);

$s_1 = isset($_POST['s_1']);
$length_1 = isset($_POST['length_1']);
$volume_1 = isset($_POST['volume_1']);

$s_2 = isset($_POST['s_2']);
$length_2 = isset($_POST['length_2']);
$volume_2 = isset($_POST['volume_2']);

$s_3 = isset($_POST['s_3']);
$length_3 = isset($_POST['length_3']);
$volume_3 = isset($_POST['volume_3']);

$s_4 = isset($_POST['s_4']);
$length_4 = isset($_POST['length_4']);
$volume_4 = isset($_POST['volume_4']);

$s_5 = isset($_POST['s_5']);
$length_5 = isset($_POST['length_5']);
$volume_5 = isset($_POST['volume_5']);

$s_6 = isset($_POST['s_6']);
$length_6 = isset($_POST['length_6']);
$volume_6 = isset($_POST['volume_6']);

$s_7 = isset($_POST['s_7']);
$length_7 = isset($_POST['length_7']);
$volume_7 = isset($_POST['volume_7']);

$s_8 = isset($_POST['s_8']);
$length_8 = isset($_POST['length_8']);
$volume_8 = isset($_POST['volume_8']);

$s_9 = isset($_POST['s_9']);
$length_9 = isset($_POST['length_9']);
$volume_9 = isset($_POST['volume_9']);

$s_10 = isset($_POST['s_10']);
$length_10 = isset($_POST['length_10']);
$volume_10 = isset($_POST['volume_10']);

$_catalog_ = isset($_POST['table_categories']);

//и картинки ....
if (!empty($_FILES['uploadfile']['name']))
{
  
  $uploaddir = isset($_POST['table_dir_img']);
  $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
  if (!is_uploaded_file($_FILES['uploadfile']['tmp_name']))
  {
    echo 'ошибка передачи файла';
  } else {
    if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile))
    {
      $tes = "INSERT INTO `".$_catalog_."` (`artic`, `name`, `name_model`, `text`, `price`, `img`, `s_1`, `length_1`, `volume_1`,`s_2`, `length_2`, `volume_2`,`s_3`, `length_3`, `volume_3`,`s_4`, `length_4`, `volume_4`,`s_5`, `length_5`, `volume_5`,`s_6`, `length_6`, `volume_6`,`s_7`, `length_7`, `volume_7`,`s_8`, `length_8`, `volume_8`,`s_9`, `length_9`, `volume_9`,`s_10`, `length_10`, `volume_10`) VALUES ('$artic', '$name', '$name_model', '$text', '$price', '$uploadfile', '$s_1', '$length_1', '$volume_1', '$s_2', '$length_2', '$volume_2', '$s_3', '$length_3', '$volume_3', '$s_4', '$length_4', '$volume_4', '$s_5', '$length_5', '$volume_5', '$s_6', '$length_6', '$volume_6', '$s_7', '$length_7', '$volume_7', '$s_8', '$length_8', '$volume_8', '$s_9', '$length_9', '$volume_9', '$s_10', '$length_10', '$volume_10')";
      
        // echo $tes;
      
      $res = mysqli_query($link, $tes);
      
      if(!$res) {
          echo "FALSE";
      }
      
      
      if($res) echo "Файл упешно загружен";
      else echo     "Путь не добавлен в базу данных, но файл загружен ".mysql_error();
    } else echo     "Файл не загружен, ";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Загрузка файла</title>
  <link rel="icon" type="image/png" href="/Images/favicon.png">
  <link rel="stylesheet" href="/Fonts/font-awesome/css/font-awesome.css">
  <link href="/CSS/main.css" type="text/css" rel="stylesheet">
  <script src="/JavaScript/cart.js"></script>
  <script src="/JavaScript/jquery-3.1.1.min.js"></script>
  <script src="/JavaScript/jquery-1.10.2.js"></script>
  <script src="/JavaScript/main.js"></script>
</head>
<body>
<p><a class="log-out" href="/php/in/admin_logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a></p>
  <div class="download effect">
    <form action="" method="post" name="table_categories" enctype="multipart/form-data">
      <p class="p_download">Заполните необходимые данные</p>
      <br>

        <select name="table_categories">
          <option value="_catalog_1">Зимние комбинезоны</option>
          <option value="_catalog_2">Зимние попоны</option>
          <option value="_catalog_3">Осенне-зимние дубленки</option>
          <option value="_catalog_4">Жилетки</option>
          <option value="_catalog_5">Зимние штаны</option>
          <option value="_catalog_6">Велюровые костюмы</option>
          <option value="_catalog_7">Дождевики</option>
          <option value="_catalog_8">Дождевики для такс</option>
          <option value="_catalog_9">Толстовки и свитера</option>
          <option value="_catalog_10">Куртки</option>
          <option value="_catalog_11">Рубашки, блузки, трикотаж</option>
          <option value="_catalog_12">Джинсы, комбинезоны</option>
          <option value="_catalog_13">Халаты</option>
          <option value="_catalog_14">Платья</option>
          <option value="_catalog_15">Футболки</option>
          <option value="_catalog_16">Манекен для одежды</option>
        </select>
      <br>

      <table>
        <tr>
          <td class='td_size_download'>
            <input class="input_download" name="artic" type="text" placeholder="Артикул">
          </td>
          <td class='td_size_download'>
            <input class="input_download" name="price" type="text" placeholder="Цена">
          </td>
        </tr>
        <tr>
          <td class='td_size_download'>
            <input class="input_download" name="name" type="text" placeholder="Тип товара">
          </td>
          <td class='td_size_download'>
            <input class="input_download" name="name_model" type="text" placeholder="Название модели">
          </td>
        </tr>
        <tr>
          <td class='td_size_download'>
            <textarea class="textarea_download" rows="10" name="text" placeholder="Описание товара"></textarea>
          </td>
          <td class='td_size_download'>
            <p>Для переноса на новую строку введите <br> &lt;br&gt;</p>
            <p>- текст 1; &lt;br&gt;</p>
            <p>- текст 2; &lt;br&gt;</p>
            <p>- текст 3. &lt;br&gt;</p>
          </td>
        </tr>
      </table>
  </div>
  <div class="download effect">
      <p class="p_download">размер: 0; спина: 00-00 см; грудь: 00-00 см</p>
      <br>
  <?php
    for ($i=1; $i<11; $i++) {
      echo "<table>
      <tr>
      <td class='td_size_download' style='width: 50px;'>$i</td>
      <td class='td_size_download'>
      <input class='input_download_size' type='text' name='s_$i' id='favorite_team' list='razm_1_1' placeholder='Размер'>
      <datalist id=\"razm_1_1\">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>XS</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
            </datalist>
      </td>
      <td class='td_size_download'>
      <input class='input_download_size' type='text' name='length_$i' id='favorite_team' list='l_1_1' placeholder='Длина спины'>
      <datalist id=\"l_1_1\">
              <option>18-20</option>
              <option>23-26</option>
              <option>26-28</option>
              <option>27-30</option>
              <option>28-33</option>
              <option>33-36</option>
              <option>36-39</option>
              <option>38-42</option>
              <option>41-45</option>
              <option>46-51</option>
              <option>-//-</option>
              <option>22-24</option>
              <option>23-26</option>
              <option>27-30</option>
              <option>29-32</option>
              <option>31-35</option>
              <option>-//-</option>
              <option>34-38</option>
              <option>37-42</option>
              <option>43-46</option>
              <option>49-53</option>
              <option>-//-</option>
              <option>38-42</option>
              <option>43-47</option>
              <option>48-52</option>
            </datalist>
      </td>
      <td class='td_size_download'>
      <input class='input_download_size' type='text' name='volume_$i' id='favorite_team' list='v_1_1' placeholder='Объём груди'>
      <datalist id=\"v_1_1\">
              <option>25-29</option>
              <option>28-32</option>
              <option>32-39</option>
              <option>32-40</option>
              <option>50-57</option>
              <option>41-48</option>
              <option>58-68</option>
              <option>47-58</option>
              <option>58-62</option>
              <option>63-68</option>
              <option>-//-</option>
              <option>35-39</option>
              <option>27-41</option>
              <option>43-47</option>
              <option>43-48</option>
              <option>55-61</option>
              <option>-//-</option>
              <option>52-62</option>
              <option>60-75</option>
              <option>59-72</option>
              <option>64-80</option>
              <option>-//-</option>
              <option>42-52</option>
              <option>44-54</option>
              <option>52-62</option>
            </datalist>
      </td>
      </tr>
      </table>";
    }
  ?>
    <br><hr><br>
    <select name="table_dir_img">
      <option value="../Images/catalogs/1/" selected >Зимние комбинезоны</option>
      <option value="../Images/catalogs/2/">Зимние попоны</option>
      <option value="../Images/catalogs/3/">Осенне-зимние дубленки</option>
      <option value="../Images/catalogs/4/">Жилетки</option>
      <option value="../Images/catalogs/5/">Зимние штаны</option>
      <option value="../Images/catalogs/6/">Велюровые костюмы</option>
      <option value="../Images/catalogs/7/">Дождевики</option>
      <option value="../Images/catalogs/8/">Дождевики для такс</option>
      <option value="../Images/catalogs/9/">Толстовки и свитера</option>
      <option value="../Images/catalogs/10/">Куртки</option>
      <option value="../Images/catalogs/11/">Рубашки, блузки, трикотаж</option>
      <option value="../Images/catalogs/12/">Джинсы, комбинезоны</option>
      <option value="../Images/catalogs/13/">Халаты</option>
      <option value="../Images/catalogs/14/">Платья</option>
      <option value="../Images/catalogs/15/">Футболки</option>
      <option value="../Images/catalogs/16/">Манекен для одежды</option>
    </select>

      <input type="file" name="uploadfile" value="Обзор">
      <br><br><hr><br>
      <input class="btn-write_to_us" name="submit" type="submit" value="Добавить">
      <br>
  </div>

  <div class="download effect">
    <p class="p_download">Загрузка каталога на сайт</p>
    <p>TM Dogs Bomba</p>
    <br><br><hr><br>
    <form enctype="multipart/form-data" action="download.php" method="POST">
      <input type="hidden" name="MAX_FILE_SIZE" value="31457820" />
      <!-- Название элемента input определяет имя в массиве $_FILES -->
      Отправить этот файл: <input name="userfile" type="file" />
      <input type="submit" value="Send File" />
    </form>
    <br><br><hr><br>

    <?php
    $uploaddir = '../Images/';
    $uploadfile = $uploaddir . basename(isset($_FILES['userfile']['name']));
    echo '<pre>';
    if (move_uploaded_file(isset($_FILES['userfile']['tmp_name']), $uploadfile)) {
      echo "Файл корректен и был успешно загружен.\n";
    } else {
      echo "Возможная атака с помощью файловой загрузки!\n";
    }
    ?>
    
  </div>
</body>
</html>