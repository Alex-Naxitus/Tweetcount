<?php

$dbhost="localhost";
$dbname="tweetcount";
$dbuser="root";
$dbpass="mysql";



ini_set('max_execution_time', 1200);

    $array1 = array();
	
	$x=0;$y=0;$k=0;
	
	$id="";
	
	if(isset($_POST['action'])){
	$selected_val = $_POST['comp'];  // Storing Selected Value In Variable
	}
	
	
	switch ($selected_val) {
    case "Nvidia":
        $id="NV";
        break;
    case "Mattel":
        $id="MT";
        break;
    case "Texas Instruments":
        $id="TI";
        break;
	case "Dominos":
        $id="DM";
        break;
	case "Amazon":
        $id="AM";
        break;
	case "Hewlett-Packard":
        $id="HP";
        break;
	case "Sears":
        $id="SE" ;
        break;
	case "Fiat-Chrysler":
        $id="FC";
        break;
	case "Credit-Suisse":
        $id="CS";
        break;
	case "Skechers":
        $id = "SK" ;
        break;
	case "Office Depot":
        $id = "OD" ;
        break;
	case "Royal Bank of Scotland":
        $id="RB";
        break;
	}
	
	$conn = mysql_connect("localhost", "$dbuser", "$dbpass");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("$dbname")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = "SELECT * FROM TC WHERE Comp_Id='$id'";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

while ($row = mysql_fetch_assoc($result)) {

$array1=$row["CompTweet"];
$array3=$row["CompTweet2"];
$array4=$row["CompTweet3"];
$array5=$row["CompTweet4"];
$array6=$row["CompTweet5"];
$array7=$row["CompTweet6"];
$array8=$row["CompTweet7"];


}

$array2 = array(array());
$array2_1=array(0,"");

function wordcount($array1,$array2,$array2_1)
{
$count=0;
$word="";
$number=0;
$i=0;
$j=0;

	for($i=0;$i<strlen($array1);$i++)
	{

	 if(((((((((((((((((($array1[$i]==' ')||($array1[$i]=='.'))||($array1[$i]==''))||($array1[$i]==','))||($array1[$i]==';'))||($array1[$i]=='?'))||($array1[$i]=='*'))||($array1[$i]=="'"))||($array1[$i]=='!'))||($array1[$i]==')'))||($array1[$i]=='('))||($array1[$i]=='"'))||($array1[$i]=='“'))||($array1[$i]=='»'))||(($array[$i]=='«'))||($array1[$i]=='”'))||($array1[$i]=='&'))||($array1[$i]=='”'))||($array1[$i]==':')) //if not character
		{
				for($j=0;$j<sizeof($array2);$j++) //in all squares of array_2
				{
					if($word==$array2[$j][1]) //if word of array2_1 already in array2 
					{
						$number=$array2[$j][0]+1; //increment number
						$array2_1= array($number,$word);  //put word and incremented number in array2_1
						$array2[$j]=$array2_1; //replace with new array
						
						$count=1; //get out of loop
					}
					else
					{
					//if  we haven't found anything :
					$array2_1= array(1,$word);  //put word and 1 in array2_1
					}
				}
				if($count==0)
				{
				array_push($array2,$array2_1); //put array2_1 into array2

				}
				
			$word=""; //empty out word
			$count=0;
		}	
		else
		{
		$word=$word.$array1[$i]; //concat letter into word
		$word=strtolower($word);
		}
		
	}

	usort($array2, function($a, $b) {
    return $a[0] - $b[0];
});

return $array2;

}

$array2=wordcount($array1,$array2,$array2_1);
$array2=wordcount($array3,$array2,$array2_1);
$array2=wordcount($array4,$array2,$array2_1);
$array2=wordcount($array5,$array2,$array2_1);
$array2=wordcount($array6,$array2,$array2_1);
$array2=wordcount($array7,$array2,$array2_1);
$array2=wordcount($array8,$array2,$array2_1);
	
	for($x=0;$x<count($array2);$x++)
	{
	print_r($array2[$x]);
	}
	
 mysql_free_result($result);

switch ($selected_val) {
    case "Nvidia":
        $name=("Nvidia");
        break;
    case "Mattel":
        $name=("Mattel");
        break;
    case "Texas Instruments":
        $name=("Texas Instruments");
        break;
	case "Dominos":
        $name=("Dominos");
        break;
	case "Amazon":
        $name=("Amazon");
        break;
	case "Hewlett-Packard":
        $name=("Hewlett-Packard");
        break;
	case "Sears":
        $name=("Sears");
        break;
	case "Fiat-Chrysler":
        $name=("Fiat-Chrysler");
        break;
	case "Credit-Suisse":
        $name=("Credit-Suisse");
        break;
	case "Skechers":
        $name=("Skechers");
        break;
	case "Office Depot":
        $name=("Office Depot");
        break;
	case "Royal Bank of Scotland":
        $name=("Royal Bank of Scotland");
        break;
} 

$nameofile="";
$nameofile=sprintf("%s.txt",$name);
echo $nameofile;
$file2=fopen($nameofile,"w+") or die("Unable to create file!") ; //create new file

for($x=0;$x<sizeof($array2);$x++) //Writes in text, what is
{
fwrite($file2,$array2[$x][1]." : ".$array2[$x][0].PHP_EOL);


}  
fclose($file2);  












?>