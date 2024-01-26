<HTML>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<BODY background="images\90.jpg">

<div class="container">
      <div class="row" style="height: 5%; background-color:; padding:40px;">
    <div class="col-12"></div>
    
      </div>
   

  <span class="align-middle" >
    <div class="row">
    <div class="col">
      
    </div>
      
    <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
      <form method="POST" Action="Saveuser.php" name="f1">
              <div class="form-group">
                  <label for="exampleInputName"><b>USER NAME</b></label>
                  <input type="string" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                  <small id="emailHelp" class="form-text text-muted">Enter a User Name that your will remember.</small>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"><b>PASSWORD</b></label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                  <small id="passwordHelp" class="form-text text-muted">Keep it cryptic as possible.</small>
              </div>
              <div class="form-group">
                  <label ><b>CONFIRM PASSWORD</b></label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword" required>
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputPhone"><b>CONTACT NO</b></label>
                  <input type="String" class="form-control" id="PhoneNo" placeholder=" Contact Number" name="phoneno" required >
                  
              </div>
              <div class="form-group">
                  <label ><b>EMAIL</b></label>
                  <input type="String" class="form-control" id="Email" placeholder=" Email ID" name="email" required  >
                  
              </div>
               <div class="form-group">
                  <label><b>STATE</b></label>
                  <input type="String" class="form-control" id="DelAdd" placeholder="state" name="Add" required>
                  
              </div>
              <div class="form-group">
                  <label ><b>CITY</b></label>
                  <input type="String" class="form-control" id="city" placeholder=" City" name="city" required>
                  
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
</BODY>
</HTML>