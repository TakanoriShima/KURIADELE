<?php
    // 先週のレッスンと同じようにやってみましたが、ＤＡＯに「idから1つの商品を取得する」を追加して
    //　やってみましたができませんでした。


    // 選択された商品情報を受取る
    require_once 'item_dao.php';
    
    
    $id = $_POST['id'];// idに会員番号が入っている
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    
    // 画像をアップロード
    $image = ItemDAO::upload();
    // 目標
    // idから１人間を1人の人間を抜き出す
    // 抜き出した人を $human と呼ぼう
    // staticのついているget_item_by_idの($id)を抜
    
    $item = ItemDAO::get_item_by_item($item);
   
?>