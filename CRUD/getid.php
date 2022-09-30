<?php
/* Cố gắng kết nối máy chủ MySQL. Giả sử bạn đang chạy MySQL
Máy chủ có cài đặt mặc định (người dùng 'root' không có mật khẩu) */
// $link = mysqli_connect("localhost", "root", "", "crud");
 
// // Kiểm tra kết nối
// if($link === false){
//     die("ERROR: Không thể kết nối. " . mysqli_connect_error());
// }
 require_once "config.php";
// Cố gắng thực hiện câu lệnh INSERT
$sql = "INSERT INTO employees (name, address, salary) VALUES ('v', 'asdsad','3')";
if(mysqli_query($link, $sql)){
    // Lấy ID đã chèn cuối cùng
    $last_id = mysqli_insert_id($link);
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} else{
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
 
// Đóng kết nối
mysqli_close($link);
?>