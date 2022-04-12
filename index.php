<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Right Triangular Pyramid in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Volume of a Triangular Pyramid in PHP</title>
  </head>
  <body>
    <h1>Volume of a Right Triangular Pyramid in PHP</h1>
		<table>
			<tr>
				<td>
					<h3>Put in the dimensions of your pyramid (in cm):</h3>
					<form action="./results.php" method="post" target="results">
						<label for="side-a">Side a (cm):</label>
						<input type="number" step="any" name="side-a" placeholder="Enter side a (cm)"><br><br>
						<label for="side-b">Side b (cm):</label>
						<input type="number" step="any" name="side-b" placeholder="Enter side b (cm)"><br><br>
						<label for="height">Height (cm):</label>
						<input type="number" step="any" name="height" placeholder="Enter height (cm)"><br><br>
						<input type="submit" value="Calculate Volume">
					</form>
				</td>
				<td width=45%>
				</td>
			</tr>
		</table>

		<!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">
    </iframe>
  </body>
</html>