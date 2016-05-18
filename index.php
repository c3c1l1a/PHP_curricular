<!DOCTYPE HTML>
<html>
<head>
	<script src="jquery.js"></script>

</head>
<body>
	<h4>Transport Expenditure</h4>
	<table>
		<tr>
			<th>Description</th>
			<th>amount</th>
		</tr>
		<tr>
			<td><input type="text" id="desc"></td>
			<td><input type="text" id="amount"></td>
		</tr>
		<tr>
			<th>
				Total Transport expenditure
			</th>
			<th>
				0
			</th> 
		</tr>
	</table>
<script>
		$(document).ready(function(){
			var inputLtc = document.getElementById('desc'),
			inputBtc = document.getElementById('amount');

			var constantNumber = 2;
			inputLtc.onchange = function() {
   			var result = parseFloat(inputLtc.value) * constantNumber;
   			console.log(result);

   			inputBtc.value = !isNaN(result) ? result : '';
			};

		});
	</script>

</body>
</html>

