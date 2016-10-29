<?

////////////////////////////////////////////////////////////////////////////////////////////////////
// Maknet Easy Photo Gallery! :}
// syntax : $image[] => array ('image', 'alt'),
////////////////////////////////////////////////////////////////////////////////////////////////////
$image[] = array('DSC03205','','jpg');
$image[] = array('DSC03207','','jpg');
$image[] = array('DSC03224','','jpg');
$image[] = array('DSC03227','','jpg');
$image[] = array('DSC03313','','jpg');
$image[] = array('DSC03317','','jpg');
$image[] = array('DSC03329','','jpg');
$image[] = array('DSC03333','','jpg');
$image[] = array('DSC03379','','jpg');
$image[] = array('DSC03409','','jpg');
$image[] = array('DSC03411','','jpg');
$image[] = array('DSC03412','','jpg');
$image[] = array('DSC03464','','jpg');
$image[] = array('DSC03472','','jpg');
$image[] = array('DSC03475','','jpg');

?>

<? 
$page_title = 'Photo Gallery'; 
include '../../header.php'; 
?>

<!-- lboxjs image script -->

<script src="/lboxjs/js/prototype.js" type="text/javascript"></script>
<script src="/lboxjs/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="/lboxjs/js/lightbox.js" type="text/javascript"></script>

<link rel="stylesheet" href="/lboxjs/css/lightbox.css" type="text/css" media="screen" />

<!-- lboxjs image script -->

<table cellpadding="2" cellspacing="5">
 <tr>
<? 
for ( $x = 0; $x < count($image); $x++ )
{
	if ( $x % 3 == 0 && $x != 0 ) 
	{
?>
 </tr>
 <tr>
<?
	}
?>
	<td valign="top">

		<table width="150" cellpadding="2" cellspacing="0">
		 <tr>
			<td style="border-style: solid; border-width: 1px; border-color: #999999;"><a href="images/<?=$image[$x][0] . '.' . $image[$x][2];?>" rel="lightbox[gallery]" title="<?=$image[$x][1];?>"><img src="images/<?=$image[$x][0] . '_sm.' . $image[$x][2];?>" width="150" height="120" border="0" alt="<?=$image[$x][1];?>"></a></td>
		 </tr>
		 <tr>
			<td align="center" style="color: #666666; font-size: 11px; font-family: Tahoma, Arial, Verdana, sans-serif;"><?=$image[$x][1];?></td>
		 </tr>
		</table>
	
	</td>
<?
}
?>
 </tr>
</table>

<table>
 <tr>
	<td colspan="3"><img src="images/spacer.gif" width="1" height="20"></td>
 </tr>
 <tr>
	<td colspan="3" style="color: #666666; font-size: 10px;"><small>Please note JavaScript should be enabled for the images to enlarge properly. <br/> For more information about this script, click here: <a href="http://www.huddletogether.com/projects/lightbox2/" target="_blank" class="lboxjs">Lightbox JS v2.0</a></small> <br/> <br/> <br/> </td>
 </tr>
</table>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<? include '../../footer.php'; ?>
