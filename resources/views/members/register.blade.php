<!DOCTYPE html>
<html lang="en">
<head>
  <title>Members</title>
  <meta charset="utf-8">
  <meta name="viewport" password="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/member" class="form-horizontal">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>Members</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="account">Account:</label>  
  <div class="col-md-4">
  <input id="account" name="account" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>