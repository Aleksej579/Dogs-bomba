<?php
    session_start ();
    if (!empty ($_SESSION['admin'])){
    if ($_SESSION['admin']){
?>

    <html>
    <head>
    <title>Административная панель</title>
    <link href="CSS/main.css" type="text/css" rel="stylesheet">
    <style type= text/css>
        #wrap {
            width: 100%;
            height: 100%;
        }
        .loginbox1 {
            width: 300px;
            padding: 4px;
            border: 1px solid #3dc0f1;
            background-color: #3dc0f1;
            color: white;
            font-weight: bold;
        }
        .loginbox2 {
            width: 300px;
            padding: 4px;
            border: 1px solid #3dc0f1;
            color: #3dc0f1;
        }
    </style>
</head>
<body>
<center>
    <table cellpadding=0 cellspacing= «0» id= «wrap»>
        <tr>
            <td align=center>
                <table cellpadding=0 cellspacing= «0»>
                    <tr>
                        <td class=loginbox1 align=center>Вход выполнен</td>
                    </tr>
                    <tr>
                        <td class=loginbox2 align=center>
                            <a href=/php/download.php>Перейти к административной панели</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
</body>
</html>

    <?
        exit;}}$_SESSION['admin'] = false;
        include ('config.php');
        function not_logged_in (){echo '

<html>
<head>
<title>Административная панель</title>
<style type=text/css>
    #wrap {
        width: 100%;
        height: 100%;
    }
    #wraptd{
        padding: 20px;
    }
    .loginbox1 {
        width: 300px;
        padding: 4px;
        border: 1px solid #3dc0f1;
        background-color: #3dc0f1;
        color: white;
        font-weight: bold;
    }
    .loginbox2 {
        width: 300px;
        padding: 4px;
        border: 1px solid #3dc0f1;
        color: #3dc0f1;
    }
    .input_log_pass {
        width: 200px;
        margin: 3px 0;
        color: #3dc0f1;
        border: 1px solid #3dc0f1;
    }
    
</style>
</head>
<body>
<center>
    <table cellpadding=0 cellspacing=0 id=wrap>
        <tr>
            <td align=center id=wraptd>
            <table cellpadding=0 cellspacing=0>
                <tr>
                <td class=loginbox1 align=center><H1>Вход в административную панель</H1></td>
                </tr>
            <tr>
        <td class=loginbox2 align=center><br>
    <form action=index.php method=post>
    <input class="input_log_pass" type=text name=login value=Логин onclick=this.value=""><br><br>
    <input class="input_log_pass" type=text name=password value=Пароль onclick=this.value=""><br><br>
    <input class="btn-write_to_us"  type= "submit" value="Отправить"/>
    </form>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
</center>
</body>
</html>';
 exit;}
    require_once "config.php";
    if (!$_POST) not_logged_in ();
    if (!$_POST['login']) not_logged_in ();
    if (!$_POST['password']) not_logged_in ();
    if ($_POST['login']!= $adminlogin) not_logged_in ();
    if ($_POST['password']!= $adminpassw) not_logged_in ();
        $_SESSION['admin'] = true;
?>
<html>
<head>
<title>Административная панель</title>
 <style type=text/css>
     #wrap {
         width: 100%;
         height: 100%;
     }
     .loginbox1 {
         width: 300px;
         padding: 4px;
         border: 1px solid #3dc0f1;
         background-color: #3dc0f1;
         color: white;font-weight: bold;
     }
     .loginbox2 {
         width: 300px;
         padding: 4px;
         border: 1px solid #3dc0f1;
         color: #3dc0f1;
     }
 </style>
</head>
<body>

<center>
    <table cellpadding=0 cellspacing=0 id=wrap>
        <tr>
            <td align=center><table cellpadding=0 cellspacing=0>
                    <tr>
                        <td class=loginbox1 align=center><H1>Вход выполнен</H1></td>
                    </tr>
                    <tr>
                        <td class=loginbox2 align=center>
                            <a href=/php/download.php><i>Перейти к административной панели</i></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
</body>
</html>