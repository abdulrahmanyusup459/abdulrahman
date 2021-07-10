<html>
<head>
	<title>UAS Teknik Kompilasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body style="background-color:#ffff50;">
	<div class="wrap">
		<div class="header">
		<font color="WHITE">
			<h1>Teknik Kompilasi</h1>
			<h2>Abdul Rahman Yusup</h2>
			</font>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">PHP</a></li>
				<li><a href="#">Javascript</a></li>				
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
			<center><font color="WHITE">
				<h1>UAS</h1>			
				</center></font>
			</div>
			<div class="content">
			<center>
<style type="text/css">
a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
ul{padding: 14px}
li{list-style: none; display: inline;}
li a{background: #222; color:#d4d4d4;}
li a:hover{background: #4da4ff; color:#fff;}
.navi{background: #222; height: 50px}
</style>
<font color="WHITE">
<p>BUBBLE SORT Menggunakan Bahasa PHP</P>
<?php
function bubble_Sort($my_array )
{
	do
	{
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $my_array;
}
 $test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>
</center></font>
		</div>
		<div class="clear"></div>
		<div class="footer">
		<center>
			<font color="WHITE"> Teknik Kompilasi UAS Semester 6 </color>
		</center>
		</div>
	</div>
</body>
</html>