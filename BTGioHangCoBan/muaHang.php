<?php
session_start(); //Bắt đầu sử dụng session
ob_start(); //Sử dụng được hàm header
?>


<html>

<style>
    body{
        width: 500px;
        margin: 20px auto;
    }
    div{
        padding: 5px;
    }
</style>

<body>
    <form action="" method="post">
        <h4>Mua hang:</h4>
        <div>
            <p><label for="">id Hang: </label> <input type="text" name="id" id="id"></p>
            <p><label for="">Ten Hang: </label> <input type="text" name="ten" id="ten"></p>
            <p><label for="">So luong: </label> <input type="text" name="soLuong" id="soluong"></p>
            <p><label for="">Gia: </label> <input type="number" name="gia" id="gia"></p>
            <input type="submit" name="submit" id="submit">
        </div>
    </form>
    
</body>

</html>

<?php if(isset($_POST['submit'])){ 
    $id = $_POST['id']; 
    $tenhang = $_POST['ten']; 
    $soluong = $_POST['soLuong']; 
    $gia = $_POST['gia']; 
    if(!isset($_SESSION['arMuaHang'][$id]))
    { $_SESSION['arMuaHang'][$id] = array( 
        'tenhang' => $tenhang, 
        'soluong'=> $soluong, 
        'gia' => $gia );
    } else { $_SESSION['arMuaHang'][$id]['soluong'] += $soluong; } 
    header('location:gioHang.php'); 
}

// print_r($_SESSION['arMuaHoa'])
?>
<?php 
    ob_end_flush()
?>