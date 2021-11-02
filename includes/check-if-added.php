<?php
//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id) {
    
    $user_id = $_SESSION['user_id']; 
    require("common.php");
   
    $query = "SELECT * FROM users_products WHERE item_id='$item_id' AND user_id ='$user_id' and status='Đã thêm vào giỏ hàng'";
    $result = mysqli_query($con, $query);
    

    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>