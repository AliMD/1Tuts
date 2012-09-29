<?php
	include('inc/header.php');
?>
<form action="insert.php" method="post" target="ifrm">
	<table class="frm">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" size="28" /></td>
		</tr>
		<tr>
			<td>Author :</td>
			<td><input type="text" name="author" size="28" /></td>
		</tr>
		<tr>
			<td colspan="2">
				Description :
				<textarea name="desc" cols="40" rows="10" ></textarea>
			</td>
		</tr>
		<tr>
			<td>Price :</td>
			<td><input type="text" name="price" size="28" /></td>
		</tr>
		<tr>
			<td></td>
			<td class="submit"><input type="submit" name="submit" value="Add Book" /></td>
		</tr>
	</table>
	<iframe src="" name="ifrm" id="ifrm"></iframe>
</form>
<?php
	include('inc/footer.php');
?>