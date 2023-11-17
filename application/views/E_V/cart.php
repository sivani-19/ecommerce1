<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php echo form_open('cart');?>
    <form action="<?php echo base_url('cart');?>" method="post">
    <div class="dashboard">
        <div class="sales">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>quantity</th>
                    <th>remove</th>
                </tr>
            <tr>
                <?php $total_amount = 0;?>        
        <?php foreach($data as $row):?>
            <div class="product_box">
            <div class="child_product product_name">
                <?php  $id=$row->id;?>
                </div>
               <td>  <div class="child_product Image">
                <img src="<?php echo base_url('uploads/' . $row->Image); ?>" style=""><br>
                <?php echo $row->productname;?>
                </div></td>
            <td><div class="child_product amount "><?php echo $row->Amount;$total_amount+=$row->Amount;?></div></td>
               <td><div class="total_quantity" name="total_quantity"><?php echo $row->quantity;?></div></td>
                        <th> <div class="child_product remove "><a href="<?php echo base_url('E_C/Login_C/remove_from_cart?id='. $id);?>">remove</a></div></th>
                </tr>
            <?php endforeach;?>  
            <table class="Total">
            <span class="total_amount">Total Amount:<?php echo $total_amount;?></span>
            <span class="total_amount_Buy"><button class="Buy_all"><a href="buy_all">Buy Now</a> </button>
            </table>    
        </div>
        </div>   
        </form>
    </div>   
</body>
<style> 
     table {width:fit-content;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;padding: 1rem;}
   .dashboard{display: flex;justify-content: center;align-items: center;height: 80vh;position: relative;}
   .remove a{color: blue;}
  .Image img{width:9rem;height:8rem;object-fit:contain;}
   .Buy_Now{display: flex;justify-content: end;align-items: end;}
   .Buy_all{color:white;background-color: black;padding: 10px;border:none;font-size: 1.3rem;}
  .total_amount{font-size: 2rem;display: flex;justify-content: end;margin-top: 1.2rem;}
  .total_amount_Buy{display: flex;justify-content: end;}
   @media screen and (max-width: 767px) {
    table {width:fit-content;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;font-size: 1.3rem;padding: 0.4rem;}
   .dashboard{display: flex;justify-content: center;}
   .remove a{color: blue;}
  .Image img{width:5rem;height:3rem;object-fit:contain;}
  }
  @media screen and (min-width: 767px) and (max-width:1024px) {
    table {width:fit-content;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;font-size: 1.3rem;}
   .dashboard{display: flex;justify-content: center;}
  .Image img{width:8rem;height:5rem;object-fit:contain;}
  .remove a{color: blue;}
  }
  @media screen and (min-width: 281px) and (max-width: 478px){
    table {width: fit-content;border-collapse: collapse;text-align: center;position: relative;}
    .dashboard table, th, td {border: 1px solid black;}
   .dashboard{display: flex;justify-content: center;}
  .Image img{width:5.5rem;height:3rem;object-fit:contain;}
  .remove a{color: blue;}
  }
</style>
   <script> 
    setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 1000); // 2000 milliseconds (2 seconds)
var quantity_dec_buttons = document.querySelectorAll('.quantity_dec');
var quantity_inc_buttons = document.querySelectorAll('.qunatity_inc');
var total_quantity_elements = document.querySelectorAll('.total_quantity');

// Add event listeners to decrease quantity
for (var i = 0; i < quantity_dec_buttons.length; i++) {
    quantity_dec_buttons[i].addEventListener("click", function () {
        var index = Array.from(quantity_dec_buttons).indexOf(this);
        decreaseQuantity(total_quantity_elements[index]);
    });
}

// Add event listeners to increase quantity
for (var i = 0; i < quantity_inc_buttons.length; i++) {
    quantity_inc_buttons[i].addEventListener("click", function () {
        var index = Array.from(quantity_inc_buttons).indexOf(this);
        increaseQuantity(total_quantity_elements[index]);
    });
}

function decreaseQuantity(element) {
    var currentQuantity = parseInt(element.textContent, 10);
    if (currentQuantity > 1) {
        element.textContent = currentQuantity - 1;
    }
}

function increaseQuantity(element) {
    var currentQuantity = parseInt(element.textContent, 10);
    element.textContent = currentQuantity + 1;
}


</script>
</html>