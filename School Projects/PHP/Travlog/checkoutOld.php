<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$package_name = isset($_GET['package_name']) ? $_GET['package_name'] : 'Custom Travel Package';
$price = isset($_GET['price']) ? floatval($_GET['price']) : 8999.00;
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Checkout - Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; text-align: center; }
    </style>
    <script>
        function updateSummary() {
            var price = <?php echo $price; ?>;
            var qty = document.getElementById('quantity').value;
            if(qty < 1) { qty = 1; document.getElementById('quantity').value = 1; }
            var total = price * qty;
            document.getElementById('total-display').innerText = "₱" + total.toLocaleString('en-US', {minimumFractionDigits: 2});
        }
    </script>
</head>
<body>  
    
<div class="checkout-box">
    <div class="header-index">
        <h1 id="travlog">Travlog</h1>
    </div>
    <h2>Confirm Your Booking</h2>
    <hr>
    <p><strong>Package:</strong> <?php echo htmlspecialchars($package_name); ?></p>
    <p><strong>Price per Pax:</strong> ₱<?php echo number_format($price, 2); ?></p>
    
    <form action="user_page.php" method="POST">
        <input type="hidden" name="package_name" value="<?php echo htmlspecialchars($package_name); ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        
        <p>
            <label for="quantity"><br><br><br><br><br><strong>Number of Pax / Quantity:</strong></label><br><br>
            <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateSummary()" oninput="updateSummary()">
        </p>
        
        <h3><hr>Total Summary: <span id="total-display">₱<?php echo number_format($price, 2); ?></span></h3>
        
        <button type="submit" name="finalize_booking" class="btn-confirm">Confirm & Place Booking</button>
    </form>
    <br>
    <a href="packages.php" style="color: #666; text-decoration: none; font-size: 17px">Cancel and Go Back</a>
</div>
<style> 
body{
    display: flex;
    flex-direction: column;
    min-height: 87vh;

    /* Move background image here */
    background: #2b765d;
    background-image: linear-gradient(rgba(45, 146, 112, 0.75), rgba(43, 118, 93, 0.75)), 
                    url('icons/bg-travel.png');
}
#travlog{
    font-size: 60px;
    font-family: "Pacifico", cursive;
    font-weight: 400;
    margin-top: 5px;
    font-style: normal;
    padding: 5px;
    color: #2b765d; 
}
.checkout-box { 
    background: white; 
    padding: 30px; 
    width: 700px;
    max-width: 700px; 
    margin: 0 auto; 
    border-radius: 20px; 
    box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
}
.btn-confirm { 
    background: #2b765d; 
    color: white; 
    border: none; 
    padding: 12px 20px; 
    font-size: 16px; 
    border-radius: 5px; 
    cursor: pointer; 
    width: 100%; 
    margin-top: 15px; 
}
.btn-confirm:hover { 
    background: #1f5443; 
}
input[type="number"] { 
    width: px; padding: 
    5px; text-align: center; 
    border-radius: 10px; 
    font-size: 16px; 
}

</style>

</body>
</html>