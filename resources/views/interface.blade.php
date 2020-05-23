<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" >
	
<form class="form-inline" method="POST" action="/book">
	@csrf
<h3>Book</h3>
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="author">Author:</label>
    <input type="text" class="form-control" name="author">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>
</body>
</html>