<?php
session_start(); //Bắt đầu sử dụng session
ob_start(); //Sử dụng được hàm head
?>

<html>



<body>
<a href="muaHang.php">Quay lai</a>

    <table style="border: 3px;">
        <tr style="border: 3px;">
            <th>Ten San Pham</th>
            <th>So luong</th>
            <th>Gia</th>
            <th>Thanh tien</th>
        </tr>
        <?php if (!$_SESSION['arMuaHang']) // Nếu chưa có hoa nào thì chúng ta sẽ quay về trang muahoa.php 
        {
            header('location:muHang.php');
        }


        $tongTien = 0;
        foreach ($_SESSION['arMuaHang'] as $hoa) {
            $thanhTien = $hoa['gia'] * $hoa['soluong'];
            $tongTien += $thanhTien; //Vòng lặp mảng session arMuaHoa ra biển hoa
        ?>
            <tr style="border: 3px;">
                <td style="border: 3px;">
                    <?php echo "<a> $hoa[tenhang]</a>"; ?>
                </td>
                <td>
                    <?php echo "<a> $hoa[soluong]</a>"; ?>
                </td>
                <td>
                    <?php echo "<a> $hoa[gia]</a>"; ?>
                </td>
                <td>
                    <?php echo "<a> $thanhTien</a>"; ?>
                </td>
                
            </tr>
        <?php
        }
        ?>
        <tr>
            <td> <?php echo "Tong tien: $tongTien "?></td>
        </tr>
    </table>
</body>

</html>


<?php 
    ob_end_flush()
?>