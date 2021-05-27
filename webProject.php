<?php
	error_reporting(0);
	$devid = $_GET['id'];
	if($devid != null)
	{
		file_put_contents('dev2switch.txt',$devid);
		if($devid<11)
		{
			$status2 = file_get_contents("status.txt");
			$status2[$devid - 2] = $status2[$devid - 2] == '0' ? '1' : '0';
			file_put_contents("status.txt",$status2);
		}
		else if($devid > 11)
		{
			$status2 = file_get_contents("status.txt");
			$status2[$devid - 3] = $status2[$devid - 3] == '0' ? '1' : '0';
			file_put_contents("status.txt",$status2);
		}
	}
	$status = file_get_contents("status.txt");
?>
<html>
<head>
<style>
	.button
	{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 8px 4px;
		cursor: pointer;
	}
</style>
<title>Stark Secure Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<center>
<a href="webProject.php"><button class="button" > Reload Current Status</button></a>

<table id="Table_01" width="1209"  style="height:100%;" height="" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="4">
			<a href ="webProject.php?id=5" ><img src="images/webProject_01.
			<?php 
			$ext = $status[3]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="310" height="1003" alt=""></a></td>
		<td>
			<a href ="webProject.php?id=7" ><img src="images/webProject_02.
			<?php 
			$ext = $status[5]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="160" height="278" alt=""></a></td>
		<td colspan="4">
			<a href ="webProject.php?id=12" ><img src="images/webProject_03.
			<?php 
			$ext = $status[9]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="165" height="278" alt=""></a></td>
		<td colspan="4">
			<a href ="webProject.php?id=6" ><img src="images/webProject_04.
			<?php 
			$ext = $status[4]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="294" height="278" alt=""></a></td>
		<td>
			<a href ="webProject.php?id=10" ><img src="images/webProject_05.
			<?php 
			$ext = $status[8]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="280" height="278" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href ="webProject.php?id=4" ><img src="images/webProject_06.
			<?php 
			$ext = $status[2]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="208" height="224" alt=""></a></td>
		<td colspan="4">
			<a href ="webProject.php?id=3" ><img src="images/webProject_07.
			<?php 
			$ext = $status[1]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="213" height="224" alt=""></a></td>
		<td colspan="3">
			<a href ="webProject.php?id=4" ><img src="images/webProject_08.
			<?php 
			$ext = $status[2]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="198" height="224" alt=""></a></td>
		<td rowspan="2">
			<a href ="webProject.php?id=9" ><img src="images/webProject_09.
			<?php 
			$ext = $status[7]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="280" height="475" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href ="webProject.php?id=16" ><img src="images/webProject_10.
			<?php 
			$ext = $status[13]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="256" height="251" alt=""></a></td>
		<td colspan="4">
			<a href ="webProject.php?id=2" ><img src="images/webProject_11.
			<?php 
			$ext = $status[0]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="217" height="251" alt=""></a></td>
		<td>
			<img src="images/webProject_12.gif" width="36" height="251" alt=""></td>
		<td>
			<a href ="webProject.php?id=8" ><img src="images/webProject_13.
			<?php 
			$ext = $status[6]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="110" height="251" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="4">
			<a href ="webProject.php?id=14" ><img src="images/webProject_14.
			<?php 
			$ext = $status[11]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="295" height="250" alt=""></a></td>
		<td colspan="5">
			<a href ="webProject.php?id=13" ><img src="images/webProject_15.
			<?php 
			$ext = $status[10]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="324" height="250" alt=""></a></td>
		<td>
			<a href ="webProject.php?id=15" ><img src="images/webProject_16.
			<?php 
			$ext = $status[12]== '0' ? 'gif' : 'png'; echo $ext;
			?>
			" width="280" height="250" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="310" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="160" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="39" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="30" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="96" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="36" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="280" height="1" alt=""></td>
	</tr>
</table><!-- End Save for Web Slices -->
</center>
</body>
</html>