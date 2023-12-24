<html>
<body>

<?php 
echo "ยินดีต้อนรับสมาชิก คุณ " . $_POST['fname'] ;
echo " ". $_POST['lname'] ;
echo "<br />อีเมล์ของคุณ " .$_POST['email'] ;
echo "<br />เบอร์โทรศัพท์ของคุณ " .$_POST['PhoneNum'] ;
echo "<br />จำนวนหุ้นที่มี " .$_POST['stock'] ;
if(isset($_POST['news'])) {
    echo "<br />ช่องทางการรับข่าวสารของคุณ ";
    foreach($_POST['news'] as $selectedOption) {
        echo $selectedOption . " ";
    }
}
echo "<br />ประเภทบัญชีที่ฝากกับสหกรณ์ " .$_POST['account'] ;
echo "<br />ความคิดเห็น " .$_POST['comment'] ;
echo " <br /> คุณเลือกรับของที่ระลึก " .$_POST['gift'] ;





?>



</body>
</html>