<!DOCTYPE html>
<html>
<head>
	<title>Culture Fair</title>
</head>
<body>
	<form method="get" action="data.php">
	<h3>Culture fair Registration</h3>
	<table >
		<tr>
			<td style="width: 100px">
				<label >Name : </label>
			</td>
			<td>
				<input type="text" name="nm">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Branch : </label>
			</td>
			<td>
				<select style="width: 175px" value="select Semester" name="br"> 
					<option name="br">Mca</option>
					<option name="br">B E</option>
					<option name="br">M E</option>
					<option name="br">Hotal Managment</option>
				
				</select>
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Semester : </label>
			</td>
			<td>				
					<input type="radio" name="sem" value="1">1
					<input type="radio" name="sem" value="2">2
					<input type="radio" name="sem" value="3">3
					<input type="radio" name="sem" value="4">4
					<input type="radio" name="sem" value="5">5
					<input type="radio" name="sem" value="6">6

			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Roll Number : </label>
			</td>
			<td>
				<input type="text" name="roll">
			</td>
		</tr>
		<tr>
			<td style="width: ">
				<label>Email : </label>
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Contact Number : </label>
			</td>
			<td>
				<input type="text" name="phno">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject : </label>
			</td>
			<td>
				<input type="checkbox" name="sub" value="Culture" >Culture
				<input type="checkbox" name="sub1" value="Web Publishing">Web Publishing<br>
				<input type="checkbox" name="sub2" value="Technical">Technical

				<input type="checkbox" name="sub3" value="Finance">Finance<br>
				<input type="checkbox" name="sub4" value="Publication">Publication
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label title="Signature">Signature: </label>
			</td>
			<td>
				<input type="file" name="sig">
			</td>
		</tr>
		<tr>
			<td>
				<label>Experience  :</label>
			</td>
			<td>
				<textarea name="exp"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button>Submit</button>
			</td>
			
		</tr>





	</table>
</form>

</body>
</html>