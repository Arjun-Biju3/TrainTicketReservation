<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add train</title>
</head>
<body background="images\killadi1.jpg">
	<div class="container"  style="background=">
      <div class="row" style="height: 5%; background-color:; padding:40px;">
    <div class="col-12"></div>
    
      </div>
  </div>

   
 <span class="align-middle" >
    <div class="row">
    <div class="col">
      
    </div>

      
    <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
      <form method="POST" Action="Savetrain.php">
             
              <div class="form-group">
                  <label for="exampleInputPassword1">TRAIN NAME</label>
                  <input type="text" class="form-control" placeholder="TRAIN NAME" name="tname">
                 
              </div>
              <div class="form-group">
                  <label for="exampleInputSTATION">SRARTING POINT</label>
                  <input type="text" class="form-control"  placeholder="SARTING STATION" name="start">
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputPhone">DESTINATION</label>
                  <input type="String" class="form-control"  placeholder="DESTINATION" name="destination">
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputemail">TOTAL SEATS</label>
                  <input type="String" class="form-control" placeholder="NO OF SEATS" name="nos">
                  
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <div class="col -md-auto">
      
    </div>
  </div>
  </span>
   <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
    
      </div>
</div>
</body>
</html>