<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // POSTでなければログイン画面にリダイレクトする
    header('Location: /index.php');
    exit;
}

$id = $_POST['id'];
$password = $_POST['password'];

// 認証する
$result = auth($id, $password);
if (!$result) {
    // 認証に失敗したらログイン画面にリダイレクトする
    header('Location: /index.php');
    exit;
}

// セッションにログイン情報を保存する
// セッションを開始する
session_start();

// セッションにログイン情報を保存する
$_SESSION['id'] = $id;

// ログイン後の画面にリダイレクトする
header('Location: /index.php');

exit;

function auth($id, $password)
{
    // 今回は便宜上認証は成功するという前提で実装する
    return true;
}
