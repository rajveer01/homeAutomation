<?php
	error_reporting(0);
	$devid = $_GET['id'];
	if($devid != null)
	{
		file_put_contents('dev2switch.txt',$devid);
		usleep(4000000);
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
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<a href="HomeSKeem.php?id=100"><button class="button" > Reload Current Status</button></a>

<table id="Table_01" width="982" height="1059" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="4">
			<a href="HomeSKeem.php?id=5"><img src="images<?php echo $status[3]; ?>/HomeSKeem_01.png" width="981" height="118" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="118" alt=""></td>
	</tr>
	<tr>
		<td rowspan="6">
			<a href="HomeSKeem.php?id=14"><img src="images<?php echo $status[11]; ?>/HomeSKeem_02.png" width="257" height="400" alt=""></a></td>
		<td rowspan="2">
			<a href="HomeSKeem.php?id=16"><img src="images<?php echo $status[13]; ?>/HomeSKeem_03.png" width="301" height="184" alt=""></a></td>
		<td>
			<a href="HomeSKeem.php?id=4"><img src="images<?php echo $status[2]; ?>/HomeSKeem_04.png" width="225" height="154" alt=""></a></td>
		<td rowspan="3">
			<a href="HomeSKeem.php?id=7"><img src="images<?php echo $status[5]; ?>/HomeSKeem_05.png" width="198" height="205" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="154" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="HomeSKeem.php?id=3"><img src="images<?php echo $status[1]; ?>/HomeSKeem_06.png" width="225" height="192" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="HomeSKeem.php?id=2"><img src="images<?php echo $status[0]; ?>/HomeSKeem_07.png" width="301" height="178" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="21" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<a href="HomeSKeem.php?id=12"><img src="images<?php echo $status[9]; ?>/HomeSKeem_08.png" width="198" height="271" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="141" alt=""></td>
	</tr>
	<tr>
		<td rowspan="6">
			<a href="HomeSKeem.php?id=4"><img src="images<?php echo $status[2]; ?>/HomeSKeem_09.png" width="225" height="459" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="HomeSKeem.php?id=16"><img src="images<?php echo $status[13]; ?>/HomeSKeem_10.png" width="301" height="329" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="38" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<a href="HomeSKeem.php?id=13"><img src="images<?php echo $status[10]; ?>/HomeSKeem_11.png" width="257" height="405" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="76" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="HomeSKeem.php?id=6"><img src="images<?php echo $status[4]; ?>/HomeSKeem_12.png" width="198" height="270" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="215" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="HomeSKeem.php?id=8"><img src="images<?php echo $status[6]; ?>/HomeSKeem_13.png" width="301" height="114" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="55" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="HomeSKeem.php?id=10"><img src="images<?php echo $status[8]; ?>/HomeSKeem_14.png" width="198" height="195" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="59" alt=""></td>
	</tr>
	<tr>
		<td>
			<a href="HomeSKeem.php?id=15"><img src="images<?php echo $status[12]; ?>/HomeSKeem_15.png" width="257" height="136" alt=""></a></td>
		<td colspan="2">
			<a href="HomeSKeem.php?id=9"><img src="images<?php echo $status[7]; ?>/HomeSKeem_16.png" width="526" height="136" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="136" alt=""></td>
	</tr>
</table></CENTER>
<!-- End Save for Web Slices -->
</body>
</html>