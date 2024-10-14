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
    background-image: url('photos/bg6.jpg');
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
    <h1 style=" text-align: center; color: red; ">Party Order</h1>

    <table cellspacing="0" cellpadding="10" style="width:100%; margin:auto;">
        <tr>
            <th style="text-align:center;font-size:22px;color:red;">Image</th>
            <th style="text-align:center;width:130px;font-size:22px;color:red;">Food Item</th>
            <th style="text-align:center;width:130px;font-size:22px;color:red;">Each Price</th>
            <th style="text-align:center;width:130px;font-size:22px;color:red;">Dozen Price</th>
            <th style="text-align:center;font-size:22px;color:red;">Action</th>
        </tr>

<?php
                  // Array of products
                        $products = [
                           ["Party Sausage Roll", "sausage.jpg", 3.50, 28],
            ["Party Quiche Lorraine", "quiche.jpg", 3.50, 30],
            ["spinach.jpg", "Spinach & Cheese Filo", 3.50, 30],
            ["partypies.jpg","Party Pies",  3.50, 30],
            ["vegetable.jpg","Party Quiche Vegetable",  3.50, 30],
            ["vegpastie.jpg", "Vegan Party Pastie (min 6)",  3.80, 36],
                        ];

              // Loop through each product and generate a table row
                  foreach ($products as $product) 
                  
            echo <tr>
                <td style="text-align:center;"><img src="photos/sausage.jpg" height="150" width="150" alt=" sausage.jpg "></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Party Sausage Roll</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$28</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>

                </tr>
            <tr>
                <td style="text-align:center;"><img src="photos/quiche.jpg" height="150" width="150" alt=" quiche.jpg "></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Party Quiche Lorraine</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$30</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

           <tr>
                <td style="text-align:center;"><img src="photos/spinach.jpg" height="150" width="150" alt=" spinach.jpg"></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Spinach & Cheese Filo</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$30</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

            <tr>
                <td style="text-align:center;"><img src="photos/partypies.jpg" height="150" width="150" alt=" partypies.jpg "></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Party Pies</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$30</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

            <tr>
                <td style="text-align:center;"><img src="photos/vegetable.jpg" height="150" width="150" alt=" vegetable.jpg "></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Party Quiche Vegetable</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$30</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>

              <tr>
                <td style="text-align:center;"><img src="photos/vegpastie.jpg" height="150" width="150" alt=" vegpastie.jp "></td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">Vegan Party Pastie (min 6)</td>
                <td style="text-align:center;color:black;font-size:20px;width: 250px;">$3.50</td>
                <td style="text-align:center;color:black;font-size:18px;width: 250px;">$30</td>
                <td style="text-align:center;"><a href="#" class="btn">Add to cart</a></td>
                </tr>
                
            
?>

    </table>
</body>
</html>
