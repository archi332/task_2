
<div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php echo form_open('main/signup'); ?>
        <div class="text-center"><H3>Форма авторизации</H3></div>
        <div class="form-group">
          <label for="exampleInputEmail1" title="lsdfkdzvn">Name of user</label>
          <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name" title="lsdfkdzvn">   
          <?php echo form_error('name'); ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">  
          <?php echo form_error('password'); ?>
        </div>
        <button type="submit" class="btn btn-default">Войти</button>

        <a href="<?php echo site_url().'/main/form_reg'?>" class="btn btn-info">Регистрация нового пользователя</a>
      </form>
    </div>
</div>
