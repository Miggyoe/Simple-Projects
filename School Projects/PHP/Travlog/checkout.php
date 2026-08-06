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
        // This function executes instantly inside the user's browser with 0ms delay
        function updateSummary() {
            var price = <?php echo $price; ?>;
            var qty = parseInt(document.getElementById('quantity').value);
            
            if (isNaN(qty) || qty < 1) { 
                qty = 1; 
                document.getElementById('quantity').value = 1; 
            }
            
            var subtotal = price * qty;
            var discount = 0;
            
            // Instantly check for the 10% discount requirement
            if (qty >= 3) {
                discount = subtotal * 0.10;
                document.getElementById('discount-row').style.display = 'block';
                document.getElementById('discount-display').innerText = "-₱" + discount.toLocaleString('en-US', {minimumFractionDigits: 2});
            } else {
                document.getElementById('discount-row').style.display = 'none';
            }
            
            var total = subtotal - discount;
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
        
        <div class="payment-section">
            <h3>Select Payment Method</h3>
            <div class="payment-options">
                <label class="payment-card">
                    <input type="radio" name="payment_method" value="GCash" checked>
                    <div class="payment-details">
                        <span class="payment-name">GCash</span>
                    </div>
                </label>

                <label class="payment-card">
                    <input type="radio" name="payment_method" value="Maya">
                    <div class="payment-details">
                        <span class="payment-name">Maya</span>
                    </div>
                </label>

                <label class="payment-card">
                    <input type="radio" name="payment_method" value="Credit/Debit Card">
                    <div class="payment-details">
                        <span class="payment-name">Credit / Debit Card</span>
                    </div>
                </label>
            </div>
        </div>

        <div class="quantity-section">
            <label for="quantity"><strong>Number of Pax / Quantity:</strong></label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateSummary()" oninput="updateSummary()">
        </div>
        
        <h3><hr>Total Summary: <span id="total-display">₱<?php echo number_format($price, 2); ?></span></h3>
        
        <div id="discount-row" style="display: none; margin-top: -5px; margin-bottom: 25px;">
            <span class="discount-badge">🎉 10% Group Discount Applied: <strong id="discount-display">-₱0.00</strong></span>
        </div>
        
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
.payment-section {
    margin-top: 20px;
    text-align: left;
}
.payment-section h3 {
    font-size: 18px;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
}
.payment-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 400px;
    margin: 0 auto;
}
.payment-card {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    background: #f9f9f9;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.payment-card:hover {
    background: #f0f7f4;
    border-color: #2b765d;
}
.payment-card input[type="radio"] {
    margin-right: 15px;
    accent-color: #2b765d;
    transform: scale(1.2);
}
.payment-name {
    font-weight: 600;
    color: #333;
    font-size: 15px;
}
.quantity-section {
    margin-top: 30px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}
.discount-badge {
    background-color: #e6f4ea;
    color: #137333;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    display: inline-block;
    font-weight: 500;
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
    width: 60px; 
    padding: 5px; 
    text-align: center; 
    border-radius: 10px; 
    font-size: 16px; 
    border: 1px solid #ccc;
}
</style>

</body>
</html>