<?php
print <<< HERE

<form action="StatCalcObj.php" method="POST";>
	Data(comma separated)<input type="text" name='data' ><br />
	Min<input type="checkbox" name=ops[] value='min' checked />
	Max<input type="checkbox" name=ops[] value='max' checked />
	Mean<input type="checkbox" name=ops[] value='mean'checked />
	Median<input type="checkbox" name=ops[] value='median' checked />
	<br>
		
<input type="submit" name='submit' value='Calculate'><br>
</form>
HERE;

?>
