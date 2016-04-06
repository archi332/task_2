<div>
<form action="" method="post">
  <label><H3>Форма авторизации</H3></label>
  <div class="form-group">
    <label for="exampleInputEmail1">Name of user</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" style="width: 53%">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" style="width: 53%">
  </div>
  <button type="submit" class="btn btn-default">Войти</button>

  <a href="<?php echo site_url().'/Welcome/form_reg'?>" class="btn btn-info">Регистрация нового пользователя</a>
</form>


<?php  
  var_dump($_POST);
?>
</div>
