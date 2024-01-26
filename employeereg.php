<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY background="images\background1.jpg">

  <div class="row" style="height: 5%; background-color:; padding:40px;">
    <div class="col-12"></div>
    
      </div>
   

  <span class="align-middle" >
    <div class="row">
    <div class="col">
      
    </div>
      
    <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
      <form method="POST" Action="saveemployee.php">
              <div class="form-group">
                  <label for="exampleInputName"><b>STAFF NAME</b></label>
                  <input type="string" class="form-control" id="username" name="sname" placeholder="NAME" required>
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputusername"><b>USER NAME</b></label>
                  <input type="text" class="form-control" id="exampleInputusername"  name="username" placeholder="USER NAME" required>
                 
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"><b>PASSWORD</b></label>
                  <input type="password" class="form-control" id="exampleInputPassword"  name="password" placeholder="PASSWORD" required>
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputPhone"><b>PHONE NO</b></label>
                  <input type="String" class="form-control" id="PhoneNo" name="phoneno" placeholder="PHONE NO" required>
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputemail"><b>EMAIL</b></label>
                  <input type="String" class="form-control" id="Email" name="email" placeholder="EMAIL" required>
                  
              </div>
               <div class="form-group">
                  <label for="exampleInputPhone"><b>ID NUMBER</b></label>
                  <input type="String" class="form-control" id="DelAdd"  name="uad" placeholder="ADHAR NO" required>
                  
              </div>
              <div class="form-group">
                  <label for="exampleInputPhone"><b>ADRESS</b></label>
                  <input type="String" class="form-control" id="PhoneNo" name="adress" placeholder="PRMMANENT ADRESS" required>
                  
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