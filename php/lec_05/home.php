<?php  

    include("header.php"); 

    // echo"<pre>";
    // print_r($_POST);
    // echo"</pre>";
    

        if(isset($_SESSION['UserData']['UserName']))
        {
            if(isset($_POST['btn-submit']))
            {
                if($_SESSION['UserData']['UserName'] == "vala yashpal" && $_SESSION['UserData']['password'] == "1234")
                {  
                    $id=$_POST['btn-submit'];
                    $_SESSION['cartdata'][$id] =  array("item-id"=>$id,
                                                                    "item-image"=>$_POST['item-image-'.$id],
                                                                    "item-name"=>$_POST['item-name-'.$id],
                                                                    "item-des"=>$_POST['item-des-'.$id],
                                                                    "item-price"=>$_POST['item-price-'.$id],
                                                                    "item-quantity"=>$_POST['item-quantity-'.$id]
                                                                    );
                    echo'<script> alert("session set");</script>';                                           
                }else{
                echo'<script> alert("session not set/plze first login");</script>';
                }
            }
        }
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    
    <style>
                * {
        padding: 0;
        margin: 0;
        position: relative;
        box-sizing: border-box;
        }
        .listing-section, .cart-section {
        width: 100%;
        float: left;
        padding: 1%;
        border-bottom: 0.01em solid #dddbdb;
        }
        .product {
        float: left;
        width: 23%;
        border-radius: 2%;
        margin: 1%;
        
        }
        .product:hover {
        box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
        -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        }
        .image-box {
        width: 100%;
        overflow: hidden;
        border-radius: 2% 2% 0 0;
        }
        .images {
        height: 15em;
        background-size: cover; 
        background-position: center center; 
        background-repeat: no-repeat;
        border-radius: 2% 2% 0 0;
        transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -webkit-transition: all 1s ease;
        -o-transition: all 1s ease;
        }
        .images:hover {
        transform: scale(1.2);
        overflow: hidden;
        border-radius: 2%;
        }
        /* IMAGES site(https://www.baag.com.au/fruit-trees/) */
        #image-1 {background-image: url("fruimg/01oranges.jpg");}

        #image-2 {background-image: url("fruimg/02apple.jpg ")}

        #image-3 {background-image: url("fruimg/03Passion.jpg")}

        #image-4 {background-image: url("fruimg/04pineapple.jpg")}

        #image-5 {background-image: url("fruimg/05mango.jpg")}

        #image-6 {background-image: url("fruimg/06coconut.jpg")}

        #image-7 {background-image: url("fruimg/07bana.jpg")}

        #image-8 {background-image: url("fruimg/08plums.jpg")
        }
        .text-box {
        width: 100%;
        float: left;
        border: 0.01em solid #dddbdb;
        border-radius: 0 0 2% 2%;      
        padding: 1em;
        height:300px
        }
        h2, h3 {
        float: left;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 1em;
        text-transform: uppercase;
        margin: 0.2em auto;
        }
        .item, .price {
        clear: left;
        width: 100%;
        text-align: center;
        }
        .price {
        color: Grey;
        }
        .description, label, button, input {
        float: left;
        clear: left;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        font-size: 1em;
        text-align: center;
        margin: 0.2em auto;
        }
        input:focus {
        outline-color: #fdf;
        }
        label {
        width: 60%;
        }
        .text-box input {
        width: 15%;
        clear: none;
        }
        .text-box button {
        margin-top: 1em;
        }
        button {
        padding: 2%;
        background-color: #375a7f;
        border: none;
        border-radius: 2%;
        }
        button:hover {
        bottom: 0.1em;
        }
        button:focus {
        outline: 0;
        }
        button:active {
        bottom: 0;
        background-color: #fdf;
        }
        .table-heading, .table-content {
        width: 75%;
        margin: 1% 12.25%;
        float: left;
        background-color: #dfd;
        }
        .table-heading h2 {
        padding: 1%;
        margin: 0;
        text-align: center;
        }
        .cart-product {
        width: 50%;
        float: left;
        }
        .cart-price {
        width: 15%;
        float: left;
        }
        .cart-quantity {
        width: 10%;
        float: left;
        }
        .cart-total {
        width: 25%;
        float: left;
        }
        .cart-image-box {
        width: 20%;
        overflow: hidden;
        border-radius: 2%;
        float: left;
        margin: 1%;
        }
        .cart-images {
        height: 7em;
        background-size: cover; 
        background-position: center center; 
        background-repeat: no-repeat;
        }
        .cart-item {
        width: 20%;
        float: left;
        margin: 3.2em 1%;
        text-align: center;
        }
        .cart-description {
        width: 53%;
        float: left;
        margin: 3.2em 1%;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        font-size: 1em;
        text-align: center;
        }
        .cart-price h3, .cart-total h3 {
        margin: 3.2em 5% 3.2em 20%;
        width: 60%;
        }
        .cart-quantity input {
        margin: 3.2em 1%;
        border: none;
        }
        .remove {
        width: 10%;
        margin: 1px;
        float: right;
        clear: right;
        }
        .coupon {
        width: 20%;
        background-color: #dfd;
        margin: 1% 1% 1% 12.25%;
        float: left;
        height: 6em;
        }
        .coupon input {
        width: 60%;
        border: none;
        margin: 12.75% 5%;
        padding: 1%;
        }
        .coupon button {
        width: 25%;
        float: left;
        clear: right;
        margin: 12% 5% 12% 0;
        }
        .keep-shopping {
        width: 15%;
        height: 6em;
        float: left;
        margin: 1% auto;
        padding: 1%;
        background-color: #dfd;
        }
        .keep-shopping button {
        text-transform: uppercase;
        margin: 12% auto;
        
        }
        .checkout {
        width: 37.25%;
        margin: 1% 12.75% 1% 1%;
        float: right;
        background-color: #dfd;
        height: 6em;
        }
        .checkout button {
        width: 30%;
        clear: none;
        margin: 5.4% 0 5.4% 5.5%;
        text-transform: uppercase;
        }
        .final-cart-total {
        width: 15%;
        float: right;
        margin: 7%;
        background-color: White;
        }
        .final-cart-total h3 {
        color: Black;
        }  
    </style>
</head>
<body>
    
        <div class="listing-section">     
            <?php
            // Read the JSON file 
            $json = file_get_contents('produc.json');
            $json_data = json_decode($json,true);

            foreach($json_data['products'] as $value)
            {
                $id=$value['id'];
                ?>

            <div class="product">
                <div class="image-box">
                        <div class="images" >
                            <img src='<?php echo $value['thumbnail']; ?>' style=' width:350;height:300'>
                        </div>
                </div>
                <div class="text-box">
                
                    <h2 class="item"><?php echo $value['title']; ?></h2>
                    <h3 class="price">  &#x20b9; <?php echo $value['price']; ?></h3>
                    <p class="description"><?php echo $value['description']; ?></p>
                
                    <form method="post">

                        <label for="item-quantity">Quantity:</label>
                         <input type="hidden" name="item-id-<?php echo $id; ?>" id="item-id" value="<?php echo $id; ?>">
                        <input type="hidden" name="item-image-<?php echo $id; ?>" id="item-image" value="<?php echo $value['thumbnail']; ?>">
                        <input type="hidden" name="item-name-<?php echo $id; ?>" id="item-name" value="<?php echo $value['title']; ?>">
                        <input type="hidden" name="item-des-<?php echo $id; ?>" id="item-des" value="<?php echo $value['description']; ?>">
                        <input type="hidden" name="item-price-<?php echo $id; ?>" id="item-price" value="&#x20b9; <?php echo $value['price']; ?>">
                        <input type="number" name="item-quantity-<?php echo $id; ?>" id="item-quantity" value="1">
                        <button type="submit" name="btn-submit" value='<?php echo $id; ?>' id="item-button">Add to Cart</button>

                    </form>

                </div>
            </div>
                <?php            
            }
            ?>
                
    </div>   

</body>
</html>
