<?php
    require_once 'item_dao.php';
    var_dump($_POST); // 全ての情報が入っている
    var_dump($_FILES);// 選択した画像が入っている
    
    // //一覧ページから飛んできた会員番号を取得
    
    $id = $_POST['id'];// idに会員番号が入っている
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    
    $item = ItemDAO::get_item_by_id($id);
    
   
   
    
?>