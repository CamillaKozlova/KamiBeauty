<?php
include SITE_ROOT . "/app/database/db.php";

$errMsg='';
$users= selectAll('users');

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['button-reg'])) {

    $admin=0;
    $login=trim($_POST['login']);
    $email=trim($_POST['email']);
    $passF=trim($_POST['pass-first']);
    $passS=trim($_POST['pass-second']);



    if($login === ''|| $email === ''|| $passF === ''){
        $errMsg="Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF-8')<2){
        $errMsg="Логин не может быть менее 2-х символов";
    }elseif ($passF!==$passS){
        $errMsg="Пороли в обеих полях должны совпадать";
    }else{
        $existence=selectOne('users',['email'=>$email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg="Пользователь с такой почтой уже зарегистрирован";
        }else{
            $pass=password_hash($passF, PASSWORD_DEFAULT);
            $post=[
                'admin'=>$admin,
                'username'=>$login,
                'email'=>$email,
                'password'=>$pass,
            ];
            $id_user=insert('users',$post);
            $user=selectOne('users', ['id' => $id_user]);

            $_SESSION['id']=$user['id'];
            $_SESSION['login']=$user['username'];
            $_SESSION['admin']=$user['admin'];
            if( $_SESSION['admin']){
                header('location: ' .  BASE_URL . "admin/posts/index.php");
            }else{
                header('location: ' .  BASE_URL);
            }
        }
    }
}else{
    $login='';
    $email='';
}
//Код для формы аыторизации
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['button-log'])) {
    $email=trim($_POST['email']);
    $pass=trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence=selectOne('users',['email'=>$email]);
        if($existence && password_verify($pass, $existence['password'])){
            $_SESSION['id']=$existence['id'];
            $_SESSION['login']=$existence['username'];
            $_SESSION['admin']=$existence['admin'];
            if( $_SESSION['admin']){
                header('location: ' .  BASE_URL . "admin/posts/index.php");
            }else{
                header('location: ' .  BASE_URL);
            }
        }else{
            $errMsg="Почта либо пароль введены неверно";
        }
    }
}else{
    $email='';
}



// Код добавления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){


    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        $errMsg= "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 2){
       $errMsg= "Логин должен быть более 2-х символов";
    }elseif ($passF !== $passS) {
       $errMsg= "Пароли в обеих полях должны соответствовать!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
           $errMsg= "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass=password_hash($passF, PASSWORD_DEFAULT);
            $post=[
                'admin'=>$admin,
                'username'=>$login,
                'email'=>$email,
                'password'=>$pass,
            ];
            $id_user=insert('users',$post);
            $user=selectOne('users', ['id' => $id_user]);

            $_SESSION['id']=$user['id'];
            $_SESSION['login']=$user['username'];
            $_SESSION['admin']=$user['admin'];
            if( $_SESSION['admin']){
                header('location: ' .  BASE_URL . "admin/posts/index.php");
            }else{
                header('location: ' .  BASE_URL);
            }
        }
    }
}else{
    $login = '';
    $email = '';
}
// Код удаления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
}
// РЕДАКТИРОВАНИЕ ПОЛЬЗОВАТЕЛЯ ЧЕРЕЗ АДМИНКУ
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
    $user = selectOne('users', ['id' => $_GET['edit_id']]);

    $id =  $user['id'];
    $admin =  $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){

    $id = $_POST['id'];
    $mail = trim($_POST['email']);
    $login = trim($_POST['login']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $admin = isset($_POST['admin']) ? 1 : 0;

    if($login === ''){
       $errMsg= "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логин должен быть более 2-х символов");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Пароли в обеих полях должны соответствовать!");
    }else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) $admin = 1;
        $user = [
            'admin' => $admin,
            'username' => $login,
      //      'email' => $email,
            'password' => $pass
        ];

        $user = update('users', $id, $user);
        header('location: ' . BASE_URL . 'admin/users/index.php');
    }
}else{
    $login = '';
    $email = '';
}


