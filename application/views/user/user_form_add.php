<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Users</li>
      </ol>
</section>

    <!-- Main content -->
<section class="content">

   <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add User</h3>
            <div class="pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo">Back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <?php // echo validation_errors(); ?>
                    <form action="" method="post">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null ?>">
                            <label for="fullname">Name *</label>
                            <input type="text" name="fullname" value="<?=set_value('fullname')?>" id="fullname" class="form-control" required>
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
                            <label for="username">Username *</label>
                            <input type="text" name="username" value="<?=set_value('username')?>" id="username" class="form-control"  required>
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
                            <label for="password">Password *</label>
                            <input type="password" name="password"  value="<?=set_value('password')?>" id="password" class="form-control"  required> 
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group" <?=form_error('passconf') ? 'has-error' : null ?>>
                            <label for="passconf">Password Confirmation *</label>
                            <input type="password" name="passconf"  value="<?=set_value('passconf')?>" id="passconf" class="form-control"  required>
                            <?=form_error('passconf')?>
                        </div>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <textarea name="address" <?=set_value('address')?> id="address" class="form-control"></textarea>
                            <?=form_error('address')?>
                        </div>
                        <div class="form-group" <?=form_error('level') ? 'has-error' : null ?>>
                            <label for="level">Level *</label>
                            <select  name="level" id="level" class="form-control"  required>
                            <option value="">-Choose-</option>
                            <option value="1" <?=set_value('level')==1 ? "selected" : null?>>Admin</option>
                            <option value="2" <?=set_value('level')==2 ? "selected" : null?>>Kasir</option>
                            </select>
                            <?=form_error('level')?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i>Save</button>
                            <button style="margin-left:15px " type="Reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div>

</section>