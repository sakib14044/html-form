<!-- Getting values from a Text Box with JavaScript -->
<!-- <script>
	function formFunction() {
		// body...
		var name = document.myform.name.value;
		var showData="Username :"+name;
		document.getElementById("output").innerHTML=showData;

	}
</script> -->

<!-- <div id="output"></div> -->
<?php 
// if (isset($_POST['name'])) {
// 	// code...
// 	$name=$_POST['name'];
// 	echo "User Name : ".$name;
// }

?>
<!-- <form method="post" name="myform" id="myform" onsubmit="formFunction(); return false">
	<table>
		<tr>
			<td>User Name :</td>
			<td>
				<input type="text" name="name" required>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form> -->
<!-- Getting values from Radio Button in JavaScript -->
<!-- <script type="">
	function clickHere() {
		// body...
		var genderleng=document.myform.gender.length;
		for(i = 0; i < genderleng; i++){
			var checkValue = document.myform.gender[i].checked;
			if (checkValue) {
				var valueResult=document.myform.gender.value;
			}
		}
		var showResult="Your gender is :"+valueResult;
		document.getElementById("show").innerHTML=showResult;
	}
</script>
<p id="show"></p>
<form method="post" name="myform" id="myform" onsubmit="clickHere(); return false">
	<table>
		<tr>
			<td>User Gender :</td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="others">Others
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form> -->
<!-- Get Multiple Checkbox Values in PHP -->
<?php 
	// if (isset($_POST['submit'])) {
	// 	// code...
	// 	$cooder =$_POST['cooder'];
	// 	echo "You Selected :";
	// 	foreach ($cooder as $lang => $value) {
	// 		// code...
	// 		echo $value.",";
	// 	}
	// }\

?>
<!-- <form method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Language :</td>
			<td>
				<input type="checkbox" name="cooder[]" value="php">php
				<input type="checkbox" name="cooder[]" value="javascript">javascript 
				<input type="checkbox" name="cooder[]" value="c+">C+
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="clear" value="Clear">
			</td>
		</tr>
	</table>
</form> -->
<!-- Get Multiple Checkbox Values in JavaScript -->

<!-- <p id="show"></p>
<form method="post" name="myform" id="myform" onsubmit="multiCheck(); return false;">
	<table>
		<tr>
			<td>Language :</td>
			<td>
				<input type="checkbox" name="cooder" value="PHP">PHP
				<input type="checkbox" name="cooder" value="JAVA">JAVA 
				<input type="checkbox" name="cooder" value="C+">C+
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>
<script type="">
	
	function multiCheck() {
		// body...
		var length =document.myform.cooder.length;
		var $result="";
		for (i=0; i <length ; i++) { 
			// code...
			var checkedValue=document.myform.cooder[i].checked;
			if (checkedValue) {
				$result+=document.myform.cooder[i].value+",";
			}
		}
		var showData ="language :"+$result;
		document.getElementById("show").innerHTML=showData;
	}
</script> -->

<!-- Get Multiple Checkbox Values in JavaScript (From Ruhul) -->
<!-- <p id="show"></p>
<form method="post" name="myform" id="myform" onsubmit="event.preventDefault(); multiCheck();">
	<table>
		<tr>
			<td>Language :</td>
			<td>
				<input type="checkbox" name="cooder" value="PHP">PHP
				<input type="checkbox" name="cooder" value="JAVA">JAVA 
				<input type="checkbox" name="cooder" value="C+">C+
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>

<script type="">
	
	function multiCheck() {
		// body...
		var length = document.myform.cooder.length;
		var $result = "";
		for (var i=0; i < length ; i++) { 
			// code...
			var checkedValue = document.myform.cooder[i].checked;
			if (checkedValue) {
				$result+=document.myform.cooder[i].value+",";
			}
		}
		var showData ="language :"+$result;
		document.getElementById("show").innerHTML=showData;
	}
</script> -->


 <!-- Get Selected Option Value in JavaScript -->
<!-- <p id="show"></p>
<form method="post" name="myform" id="myform" onsubmit="selectOption(); return false;">
	<table>
		<tr>
			<td>Language :</td>
			<td>
				<select name="coder">
					<option value="">SelectOne</option>
					<option value="php">php</option>
					<option value="javaScript">JavaScript</option>
					<option value="c+">C+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>  -->
<!-- <script type="">
	function selectOption() {
		// body...
		var index   = document.myform.coder.selectedIndex;

		var value   = document.myform.coder.options[index].value;
		var showData="You are "+value+" coder";
		document.getElementById("show").innerHTML=showData;
	}
</script -->



<!-- Get data from a data table in JavaScript -->

<table class="table">
	<tr>
		<td colspan="2" align="center"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td>
			<span id="showName"></span>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<span id="showGender"></span>
		</td>
	</tr>
	<tr>
		<td>Department</td>
		<td>
			<span id="showDepartment"></span>
		</td>
	</tr>
	<tr>
		<td>Coder</td>
		<td>
			<span id="showCoder"></span>
		</td>
	</tr>
</table>

<form method="post" name="myform" id="myform" onsubmit="selectOption(event); return false;">
	<table>
		<tr>
			<td>Name:</td>
			<td>
				<input type="test" name="name" value="" required>
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="others">Others
			</td>
		</tr>
		<tr>
			<td>Department:</td>
			<td>
				<input type="checkbox" name="department" value="English">English
				<input type="checkbox" name="department" value="Bangla">Bangla 
				<input type="checkbox" name="department" value="Math">Math
			</td>
		</tr>
		<tr>
			<td>Language :</td>
			<td>
				<select name="coder">
					<option value="">SelectOne</option>
					<option value="php">php</option>
					<option value="javaScript">JavaScript</option>
					<option value="c+">C+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>
<script type="">
	function selectOption(event) {
		event.preventDefault();
		// body...
		var name =document.myform.name.value;
		document.getElementById("showName").innerHTML=name;

		var genderleng      = document.myform.gender.length;
		for (i = 0; i < genderleng ;  i++) {
			var checkedValue=document.myform.gender[i].checked;
			if (checkedValue) {
				var value  =document.myform.gender[i].value;
			}
		}
		document.getElementById("showGender").innerHTML= value;


		var departmentleng= document.myform.department.length;
		for (i = 0; i < departmentleng ;  i++) {
			var checkedDepartment    =document.myform.department[i].checked;
			if (checkedDepartment) {
				var departmentvalue  =document.myform.department[i].value;
			}
		}
		document.getElementById("showDepartment").innerHTML= departmentvalue;

		var coderValue = document.myform.coder.value;
		document.getElementById("showCoder").innerHTML = coderValue;

	}
</script>




<!-- 
<table class="table">
	<tr>
		<td colspan="2" align="center"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td>
			<span id="showName"></span>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<span id="showGender"></span>
		</td>
	</tr>
	<tr>
		<td>Department</td>
		<td>
			<span id="showDepartment"></span>
		</td>
	</tr>
	<tr>
		<td>Coder</td>
		<td>
			<span id="showCoder"></span>
		</td>
	</tr>
</table>

<form method="post" name="myform" id="myform" onsubmit="selectOption(event); return false;">
	<table>
		<tr>
			<td>Name:</td>
			<td>
				<input type="test" name="name" value="" required>
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="others">Others
			</td>
		</tr>
		<tr>
			<td>Department:</td>
			<td>
				<input type="checkbox" name="department" value="English">English
				<input type="checkbox" name="department" value="Bangla">Bangla 
				<input type="checkbox" name="department" value="Math">Math
			</td>
		</tr>
		<tr>
			<td>Language :</td>
			<td>
				<select name="coder">
					<option value="">SelectOne</option>
					<option value="php">php</option>
					<option value="javaScript">JavaScript</option>
					<option value="c+">C+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>
<script type="">
	function selectOption(event) {
		event.preventDefault();

		// body...
		var name = document.myform.name.value;
		document.getElementById("showName").innerHTML = name;

		var gender = document.myform.gender.value;
		document.getElementById("showGender").innerHTML = gender;

		var departmentsArray = [];
		var departmentleng = document.myform.department.length;
		
		for (i = 0; i < departmentleng ;  i++) {
			var checkedDepartment    = document.myform.department[i].checked;
			if (checkedDepartment) {
				departmentsArray.push(document.myform.department[i].value);
			}
		}
		document.getElementById("showDepartment").innerHTML= departmentsArray.join(', ');

		var coderValue = document.myform.coder.value;
		document.getElementById("showCoder").innerHTML = coderValue;

	}
</script>




<table class="table">
	<tr>
		<td colspan="2" align="center"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td>
			<span id="showName"></span>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<span id="showGender"></span>
		</td>
	</tr>
	<tr>
		<td>Department</td>
		<td>
			<span id="showDepartment"></span>
		</td>
	</tr>
	<tr>
		<td>Coder</td>
		<td>
			<span id="showCoder"></span>
		</td>
	</tr>
</table>
<br>
<br>


<form method="post" name="myform" id="myform" onsubmit="submitForm(event);">
	<table>
		<tr>
			<td>Name:</td>
			<td>
				<input type="test" name="name" value="" required>
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="others">Others
			</td>
		</tr>
		<tr>
			<td>Department:</td>
			<td>
				<input type="checkbox" name="department" value="English">English
				<input type="checkbox" name="department" value="Bangla">Bangla 
				<input type="checkbox" name="department" value="Math">Math
			</td>
		</tr>
		<tr>
			<td>Language :</td>
			<td>
				<select name="coder">
					<option value="">SelectOne</option>
					<option value="php">php</option>
					<option value="javaScript">JavaScript</option>
					<option value="c+">C+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
				<input type="reset" name="clear" value="clear">
			</td>
		</tr>
	</table>
</form>
<script type="">
	function submitForm(event) {
		event.preventDefault();

		// body...
		var name = document.myform.name.value;
		document.getElementById("showName").innerHTML = name;

		var gender = document.querySelector('input[name=gender]:checked').value;
		document.getElementById("showGender").innerHTML = gender;

		var departmentsArray = [];
		var departmentleng = document.myform.department.length;
		
		for (i = 0; i < departmentleng ;  i++) {
			var checkedDepartment = document.myform.department[i].checked;
			if (checkedDepartment) {
				departmentsArray.push(document.myform.department[i].value);
			}
		}

		document.getElementById("showDepartment").innerHTML = departmentsArray.join(', ');

		var coderValue = document.myform.coder.value;
		document.getElementById("showCoder").innerHTML = coderValue;

	}
</script> -->