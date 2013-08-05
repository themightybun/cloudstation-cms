<?php $this->load->view($admin_header);?>

<div class="wrapper clearfix">
    <div class="container-fluid">
        <div class="row-fluid">
            
            <?php $this->load->view($admin_nav);?>
            
            <div class="span10">
                <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox"> Remember me
                        </label>
                        <button type="submit" class="btn">Sign in</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view($admin_footer);?>