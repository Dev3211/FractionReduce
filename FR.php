<html>
<title>Reduce Fraction</title>
<head>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//for allowing only integers in our forms.
</script>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<fieldset>
<tr>
<label for="NR">Numerator</label></div></td>
<td><input name="NR" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<label for="DR">Denominator</label></div></td>
<td><input name="DR" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<input type="submit" name="submit" value="Reduce!" />
</td>
</tr>

<?php
function GCD($a, $b) {

while ($b != 0) {

$remainder = $a % $b;
$a = $b;
$b = $remainder;

}
return abs ($a);
}

if (isset($_POST['submit'])) {
$a = $_POST["NR"]; 
$b = $_POST["DR"]; 

$gcd = GCD($a, $b);
$a = $a/$gcd;
$b = $b/$gcd;
$simplified = $a . "/" . $b;
echo $simplified;
}
?>
