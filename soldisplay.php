<html>
   <head>
	<title>Kirchhoff Solution</title>
   </head>
   <body>
    
    <table width=100%>
    <tr>
    <td><center><h2><font face="arial">Kirchhoff's Laws Equation Solver</font></center>
    </h2></td>
    <td width=20%><right><a href="http://www.andrews.edu">
    <img align="right" src="../detchar/aubullet.gif" border="0"></right></td>
    </tr>
    </table>

    <hr width = "100%"> 

    <h3><center>Solution to Equations</center></h3>


<p> <?php
	//assign variables
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	$g = $_POST['g'];
	$h = $_POST['h'];
	$i = $_POST['i'];
	$k = $_POST['k'];
	$l = $_POST['l'];
	$m = $_POST['m'];

	// Calculate the determinant of the coeff matrix
	$det = $a*$e*$i + $b*$f*$g + $c*$d*$h - $a*$f*$h - $b*$d*$i - $c*$e*$g;

	// Error if the Matrix is singular
	if ($det == 0) {
	    echo "ERROR: The equations are not independant, try again! \n";
	} else {
	    settype($det, "float");
	    $I1 = $k*$e*$i + $b*$f*$m + $c*$l*$h - $k*$f*$h - $b*$l*$i - $c*$e*$m;
	    settype($I1, "float");
	    $I1 = $I1 / $det;
	    $I2 = $a*$l*$i + $k*$f*$g + $c*$d*$m - $a*$f*$m - $k*$d*$i - $c*$l*$g;
	    settype($I2, "float");
	    $I2 = $I2 / $det;
	    $I3 = $a*$e*$m + $b*$l*$g + $k*$d*$h - $k*$e*$g - $b*$d*$m - $a*$l*$h;
	    settype($I3, "float");
	    $I3 = $I3 / $det;
 
 	    echo "<center>";
            echo "I<sub>1</sub> = ".$I1."<br><br>";
	    echo "I<sub>2</sub> = ".$I2."<br><br>";
	    echo "I<sub>3</sub> = ".$I3."<br><br>";
	    echo "</center>";
	}
?> </p>

<p><center>
<form method="link" action="index.php">
<input type="submit" value="Enter new equations">
</form>
</center></p>

</body>
</html>
