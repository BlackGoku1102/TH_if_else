<?php
$product_id = 123;
if($result = $mysqki->query("SELECT * FROM products WHERE id = '$product_id' "))
{
    if ($result->num_rows ==1)
    {
        $row = $result->fetch_assoc();
        if ($row['quantily'] > 0)
        {
            echo "Nếu sản phẩm còn hàng, thực hiện thao tác khác.";
        }
    } else
    {
        echo " Sản phẩm đã hết hàng.";
    }
} else{
    echo "Không tìm thấy sản phẩm này.";
    result->close();
} esle {
    echo "Lỗi:" . $mysqli->error;
}

?>