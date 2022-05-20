<?php

//контроллер
$page= $_GET['post'];
$email='';
$comment='';
$errMsg=[];
$status=0;
$comments=[];


//Код для формы создания комментария
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['goComment'])) {


    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    if ($email=== '' || $comment === '' ) {
        array_push($errMsg,"Не все поля заполнены!");
    } elseif (mb_strlen($comment, 'UTF-8') < 50) {
        array_push($errMsg,"Комментарий должен быть более 50 символов");
    } else {
        $user= selectOne('users', ['email'=>$email]);
        if($user['email']==$email && $user['admin']==1)
        {
            $status=1;
        }

        $comment = [
            'status' => $status,
            'page' => $page,
            'email' => $email,
            'comment' => $comment,

        ];

        $comment = insert('comments', $comment);
        $comments = selectAll('comments', ['page' => $page, 'status=>1']);

    }

} else {
    $email='';
    $comment='';
    $comments = selectAll('comments', ['page' => $page, 'status=>1']);
}
