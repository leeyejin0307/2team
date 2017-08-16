<?php
    include "../db_con.php";
    session_start();
    if(!isset($_SESSION['id'])) {
        echo "<script>alert('로그인을 해주세요.');location.href='../login.php';</script>";
        exit;
    }
    $curl = $_GET['curl'];
    $user = $_SESSION['id'];
/*    $sql = "select * from cafe where curl = '{$curl}' and cadmin = '{$user}'";
    $go = $db -> prepare($sql);
    $go->execute();
    $re = $go -> fetch();
    if($_SESSION['id']!=$re['cadmin']){
           echo "<script>alert('카페 개설자만 사용가능합니다.');history.back();</script>";
           exit;
    }*/

 $sql = "select * from cafe where curl = '{$curl}'";
 $go = $db -> prepare($sql);
 $go -> execute();
 $re = $go -> fetch();

if(isset($curl)) {
   $sql = "DELETE FROM cafe where curl='{$curl}'";
    $go = $db -> prepare($sql);
    $go->execute();
    
echo "<script>alert('삭제완료');</script>";
}

?>
<!--http://localhost/php/admin/php/index.php-->
