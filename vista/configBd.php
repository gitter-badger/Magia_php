<form class="form-horizontal" action="" method="get">
    <input type="hidden" name="a" value="configBd">
    
    
  <div class="form-group">
    <label for="hostname" class="col-sm-2 control-label">Hostname</label>
    <div class="col-sm-10">
        <input type="text" name="hostname" class="form-control" id="hostname" placeholder="localhost" value="<?php echo $hostname; ?>">
    </div>
  </div>
    
    
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="root" value="<?php echo $username; ?>">
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="text" name="password" class="form-control" id="password" placeholder="password" value="<?php echo $password; ?>">
    </div>
  </div>
    
  <div class="form-group">
    <label for="dbname" class="col-sm-2 control-label">DataBase</label>
    <div class="col-sm-10">
        <input type="text" name="dbname" class="form-control" id="dbname" placeholder="" value="<?php echo $dbname; ?>">
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Edit</button>
    </div>
  </div>
    
    
</form>