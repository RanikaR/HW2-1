<?php
	// gets the data from the form	
	$desc       = $_POST["product_description"];
	$list_price = $_POST["list_price"];
	$disc_perc   = $_POST["discount_percentage"];

	// calculates discount
	$disc = $list_price * $disc_perc * .01;
	$disc_price = $list_price - $disc;

	// applies current formatting to dollar and percent amounts
	$list_price_formatted = "$".number_format($list_price, 2);
	$disc_perc_formatted = $disc_perc."%";
	$disc_formatted = "$".number_format($disc, 2);
	$disc_price_formatted = "$".number_format($disc_price, 2);

	// escapes unformatted input
	$product_descripion_escaped = htmlspecialchars($product_description);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $disc_perc_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $disc_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $disc_price_formatted; ?></span><br>
    </main>
</body>
</html>
