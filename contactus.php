<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'times New roman', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 400px; /* Reduced container width */
            margin: 50px auto; /* Centered vertically and horizontally */
            padding: 20px; /* Reduced padding */
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px; /* Slightly rounded corners */
        }

        h1 {
            text-align: center;
            font-size: 24px; /* Reduced font size for heading */
            color: #333;
            margin-bottom: 15px; /* Reduced bottom margin */
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 8px; /* Reduced gap between form elements */
        }

        label {
            font-weight: bold;
            font-size: 14px; /* Reduced label font size */
            text-transform: uppercase;
            margin-bottom: 2px; /* Reduced bottom margin */
        }

        .required {
            color: red;
            font-size: 10px; /* Reduced font size for required indicator */
            margin-left: 5px;
        }

        input, textarea {
            width: 100%; /* Full width of the container */
            max-width: 300px; /* Set a maximum width for input fields */
            padding: 8px; /* Padding for input fields */
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px; /* Font size for input text */
        }

        textarea {
            height: 80px; /* Height for the message textarea */
        }

        input[type="submit"] {
            width: 120px; /* Submit button width */
            background-color: black;
            color: white;
            border: none;
            padding: 10px; /* Padding for submit button */
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            align-self: center;
            margin-top: 10px; /* Reduced margin top */
        }

        input[type="submit"]:hover {
            background-color: #333; /* Hover effect for submit button */
        }

        @media (max-width: 600px) {
            /* Responsive design */
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>
    <div class="container">
        <h1>Contact Us</h1>

        <form action="submit_form.php" method="POST">
            <label for="name">Name <span class="required">(required)</span></label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email <span class="required">(required)</span></label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject <span class="required">(required)</span></label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message <span class="required">(required)</span></label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
