<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call function from string stored
		in a variable using JavaScript
	</title>
</head>

<body>
	<h1 style="color: green">
		GeeksforGeeks
	</h1>
	
	<b>
		How to call function from string stored
		in a variable using JavaScript
	</b>
	
	<p>
		Click on the button to call the
		function in the string
	</p>
	
	<p class="example">
		GeeksforGeeks is a computer
		science portal.
	</p>

	<button onclick="evaluateFunction()">
		Click here
	</button>
	
	<script type="text/javascript">
	
		function changeColor(color) {
			document.querySelector('.example').style
				= `color: ${color}`;
		}

		function evaluateFunction() {
			stringFunction = "changeColor";
			param = 'red';
			window[stringFunction](param);
		}
	</script>
</body>

</html>					
