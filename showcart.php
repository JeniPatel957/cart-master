<?php
	session_start();
	require("connection.php");
	require("header.php");
	require("functions.php");
	
	echo "<h1>Your Cart</h1>";
	
	showcart();
	if(isset($_SESSION['SESS_ORDERNUM'])){
		$sess_ordernum = $_SESSION['SESS_ORDERNUM'];
		$sql = "SELECT * FROM orderitems WHERE order_id =$sess_ordernum";
		
		$result = mysqli_query($conn,$sql) or die(mysql_error());
		
		$row = mysqli_num_rows($result);
		
		if($row >= 1){
			echo "<h2><a href='checkout-address.php'>Go to the checkout</a></h2>";

		}
                echo 'successufully...';
	}
	require("footer.php");
	
?>
<style>
    #num
    {
        color: red;
        background: #036d4d;
        size: 10px;
    }
<<<<<<< OURS
    </style>
    <form>
        <table>
            <tr id="na">
                <td>Name:
                </td>
                <td><input type="text" name="txtname"></td>
            </tr>
            <tr id="na">
                <td>Quantity</td>
                <td><input type="number" name="txtnumbe"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="sub" value="submit">
                </td>
            </tr>
        </table>
    </form>
=======
    .des{
        background: #dddddd;
        font-family: serif;
    }
</style>
<form action="" method="post">
    <table>
        <tr>
            <td>
                ProductName:
            </td>
            <td>
                <input type="text" name="txtname">
            </td>
        </tr>
            <tr>
            <td>
                Price:
            </td>
            <td>
                <input type="number" name="txtnumber">
            </td>
        </tr>
            <tr>
            <td>
                Quantity:
            </td>
            <td>
                <input type="number" name="txtqty">
            </td>
        </tr>
            <tr>
           
            <td>
                <input type="submit" name="btnsub" value="Submit">
            </td>
        </tr>
        
    </table>
</form>
>>>>>>> THEIRS
