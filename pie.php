<?php

include("cbdconnection.php");
    if(isset($_POST['search']))
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>
        <style>
             body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('photos/bg7.jfif');
    background-size: cover;
    background-attachment: fixed;
    background-position: center top;
    background-color: #f4f4f4;
    background-repeat: no-repeat;
    margin: 0;
   padding: 0;
   font-family: Arial, sans-serif;
}

h1 {
    
    position: fixed;
            left: 50%;
           margin-top: 5px;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: red;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
    
    

}

/* Table Styles */
table {
    width: 80%;
    margin: 30px auto;
    border-collapse: collapse;
    background-color: none;
    border: 1px solid #ddd;
}


th, td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: red;
    font-size: 22px;
}

td {
    font-size: 18px;
    color: #333;
}

img {
    border-radius: 15px;
}   
        .btn {
            line-height: 2;
            display: inline-block;
            font-size: 1.8rem;
            text-decoration: none;
            border-radius: 10px;
            color: black;
            padding: 8px;
            background-color: lightblue;
            font-size: 20px;
            font-weight: bold;
        }
        .btn:hover {
            color: black;
        }
    </style>

<body>

<a href="categorypage.php" class="btn">Back</a>
    <h1 style="text-align:center; color:red;">Pies</h1>

    <table cellspacing="0" cellpadding="10" style="width:100%; margin:auto;">
        <tr>
            <th style="text-align:center;font-size:22px;color:red;">Image</th>
            <th style="text-align:center;width:130px;font-size:22px;color:red;">Food Item</th>
            <th style="text-align:center;width:130px;font-size:22px;color:red;">Price</th>
            <th style="text-align:center;font-size:22px;color:red;">Action</th>
        </tr>

        <?php
                  // Array of products
                        $products = [
            ["plainpie.jfif", "plain pie", 7.40],
            ["mushroom.jpg", "mushroom pie", 7.70],
            ["onion.jpg", "steak & onion pie", 7.70],
            ["pepper.jfif","pepper steak pie",  8.40],
            ["cheicken.jfif","chicken & leek pie",  8.40],
            ["cornish.jpg", "cornish pastie",  7.70],
            ["lorrainepie.jpg", "quiche lorraine ",  7.50],
            ["roll.jpg", "sausage roll",  6.20],
            ["bacon.jfif", "cheese & bacon pie",  7.70],
            ["curry.jpg", "curry pie",  7.70],
            ["filopie.jpeg", "cheese & spinach filo (v)",  7.70],
            ["vegpastie.jpeg", "vegetable pastie (vg)",  7.50],
            ["vegquiche.jpg", "vegetable quiche (v)",  7.50],
            ["minifilled.jfif", "mini filled criossants",  6.00],


               ];

              // Loop through each product and generate a table row
                  foreach ($products as $product) 
            echo 
        <tr>
                <td style="text-align:center;"><img src="photos/plainpie.jfif" height="150" width="150" alt=" plainpie.jfif "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Plain pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.40</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>

                </tr>
                <tr>
                <td style="text-align:center;"><img src="photos/mushroom.jpg" height="150" width="150" alt=" mushroom.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Mushroom pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/onion.jpg" height="150" width="150" alt=" onion.jpg"></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Steak & Onion pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/pepper.jfif" height="150" width="150" alt=" pepper.jfif "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Pepper steak pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$8.40</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/chicken.jpeg" height="150" width="150" alt=" chicken.jpeg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Chicken & Leek Pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$8.40</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/cornish.jpg" height="150" width="150" alt=" cornish.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Cornish Pastie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/lorrainepie.jpg" height="150" width="150" alt=" lorrainepie.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Quiche lorraine</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/roll.jpg" height="150" width="150" alt=" roll.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Sausage roll</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/bacon.jfif" height="150" width="150" alt=" bacon.jfif "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">cheese & bacon pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/curry.jpg" height="150" width="150" alt=" curry.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">curry pie</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/filopie.jpeg" height="150" width="150" alt=" filopie.jpeg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;"> cheese & spinach filo </td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/vegpastie.jpeg" height="150" width="150" alt=" vegpastie.jpeg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">vegetable pastie </td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/vegquiche.jpg" height="150" width="150" alt=" vegquiche.jpg "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">vegetable quiche </td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

                <tr>
                <td style="text-align:center;"><img src="photos/minifilled.jfif" height="150" width="150" alt=" minifilled.jfif "></td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">Mini filled criossants</td>
                <td style="text-align:center;color:white;font-size:20px;width: 250px;">$7.70</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>



        ?>

    </table>
</body>
</html>
