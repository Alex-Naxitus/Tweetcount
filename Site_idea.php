<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="Site_idea.css"> 
</head>

<body>
<h1>Alexandre Cornec's Website</h1>

<h2>Introduction</h2>

<p>Hello, my name is Alex and I am a third year engineering student. Here is my site.</p>

<p>I am interested in economics and I was wondering : Is there a link between the stock performance of a company and it's social media usage ?
Can we use social media as indicators of a company's performance ?</p>

<p>Here is how I found out : I looked a list of the top best performing companies and the top worst performing companies of the year, that have a large market capitalization and a large presence on twitter.</p>

<ul>Here is the list of good-performing companies :
<li>Nvidia (+177%)</li>
<li>Mattel (+52%)</li>
<li>Texas Instruments (+44%)</li>
<li>Domino's (+43%)</li>
<li>Amazon(+56%)</li>
<li>Hewlett-Packard(+56%)</li>
</ul>

<ul>Here is the list of bad-performing companies  :
<li>Sears (-56%)</li>
<li>Fiat-Chrysler (-54%)</li>
<li>Credit Suisse (-47%)</li>
<li>Skechers (-48%)</li>
<li>Office Depot (-44%)</li>
<li>RBS (-48%)</li>
</ul>

<p> Then I downloaded their twitter feed, their last tweet being in october 2016 (unfortunately Twitter only stores a maximum of 3200 tweets, it can vary case by case when the -3200th tweet was posted, for Amazon -3200th tweet is in April 2016, for Credit Suisse April 2013).</p>

<h2>Company analysis of :</h2>

<form method="POST" action="Site_idea.php">
<select name="comp">
	<option value="Amazon" >Amazon</option>
	<option value="Credit-Suisse">Credit-Suisse</option>
	<option value="Dominos">Dominos</option>
	<option value="Fiat-Chrysler">Fiat-Chrysler</option>
	<option value="Hewlett-Packard">Hewlett-Packard</option>
	<option value="Mattel">Mattel</option>
	<option value="Nvidia">Nvidia</option>
	<option value="Office Depot">Office Depot</option>
	<option value="Royal Bank of Scotland">Royal Bank of Scotland</option>
	<option value="Sears">Sears</option>
	<option value="Skechers">Skechers</option>
	<option value="Texas Instruments">Texas Instruments</option>
</select>
<input type="submit" name="action" value="Choose company"> 
</form>

</body>


</html>


<?php

if(isset($_POST['action'])){
$selected_val = $_POST['comp'];  // Storing Selected Value In Variable

switch ($selected_val) {
    case "Nvidia":
		echo '<h2>'.$selected_val.'</h2>';
        echo '<h3>Stock performance:</h3>';
		echo '<img src="Nvidia_stock.jpg" alt="Fail to show image">';
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		$lines=file("Nvidia.txt");
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
    case "Mattel":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Mattel_stock.jpg" alt="Fail to show image">';
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		$lines=file("Mattel.txt");
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
    case "Texas Instruments":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="TexasInstruments_stock.jpg" alt="Fail to show image">';
		$lines=file("Texas Instruments.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Dominos":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Dominoes_stock.jpg" alt="Fail to show image">';
		$lines=file("Dominos.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-7);$i>sizeof($lines)-37;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Amazon":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
		echo '<img src="Amazon_stock.jpg" alt="Fail to show image">';
		$lines=file("Amazon.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-5);$i>sizeof($lines)-35;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>'; 
        break;
	case "Hewlett-Packard":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Hewlett-Packard_stock.jpg" alt="Fail to show image">';
		$lines=file("Hewlett-Packard.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Sears":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Sears_stock.jpg" alt="Fail to show image">';
		$lines=file("Sears.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Fiat-Chrysler":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Fiat-Chrysler_stock.jpg" alt="Fail to show image">';
		$lines=file("Fiat-Chrysler.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-7);$i>sizeof($lines)-37;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Credit-Suisse":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="CreditSuisse_stock.jpg" alt="Fail to show image">';
		$lines=file("Credit-Suisse.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Skechers":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="Sketchers_stock.jpg" alt="Fail to show image">';
		$lines=file("Skechers.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Office Depot":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="OfficeDepot_stock.jpg" alt="Fail to show image">';
		$lines=file("Office Depot.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
	case "Royal Bank of Scotland":
		echo '<h2>'.$selected_val.'</h2>';
		echo '<h3>Stock performance:</h3>';
        echo '<img src="RBS_stock.jpg" alt="Fail to show image">';
		$lines=file("Royal Bank of Scotland.txt");
		echo '<h3>Twitter activity:</h3>';
		echo '<ol>List of unique words (excluding months, "rt", "co" ...) :';
		for($i=(sizeof($lines)-4);$i>sizeof($lines)-34;$i--)
		{
        echo '<li>'.$lines[$i].'</li>';
		}
		echo '</ol>';
        break;
}
}
echo '<br>';
echo '<br>';
echo '<br>';

echo '<footer>ALEX CORNEC, ALL RIGHTS RESERVED</footer>';
?>
