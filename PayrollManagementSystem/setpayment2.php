<!DOCTYPE html>
<html>
<title>Set Payment</title>
<div class="w3-container" style="padding: 50px 200px 20px 200px">
<form class="w3-container" action="emp-payphp.php" method="post">
<p><label>Employee id</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="empid"></p>
<p>
<label>Select Year</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="year"></p>
<p> <label>Select Month</label>
<select class="w3-input w3-light-grey w3-animate-input" name="month">
<option value="january">january</option>
<option value="february">february</option>
<option value="march">march</option>
<option value="april">april</option>
<option value="may">may</option>
<option value="june">june</option>
<option value="july">july</option>
<option value="august">august</option>
<option value="september">september</option>
<option value="october">october</option>
<option value="november">november</option>
<option value="december">december</option>
</select>
</p>
<p>
<label>Absence</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="absence"></p>
<p>
<label>Overtime</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="overtime"></p>
<p><label>Seasonal Bonus</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="sbonus"></p>
<p><label>Other Bonus</label>
<input class="w3-input w3-light-grey w3-animate-input" type="number" name="obonus"></p>
<input type="submit" name="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
</form>
</div>
</body>
</html>
