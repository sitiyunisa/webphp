<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h3>form login</h3>
<?php echo form_open("login/auth")?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">username</label> 
    <div class="col-8">
      <input id="username" name="username" placeholder="masukkan username anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="passwoard" class="col-4 col-form-label">passwoard</label> 
    <div class="col-8">
      <input id="passwoard" name="passwoard" placeholder="Masukkan passwoard anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>