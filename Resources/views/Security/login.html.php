<?php $view['slots']->start('body') ?>  
    <div class="form">  
        <form id="login" class="vertical" action="<?php echo $view['router']->generate('acme_oauth_server_auth_login_check') ?>" method="post">  
            <div class="form_title">  
                OAuth Authorization  
            </div>  
            <?php if ($error): ?>  
                <div class='form_error'><?php echo $view->escape($error); ?></div>  
            <?php endif; ?>  
            <div class="form_item">  
                <div class="form_label"><label for="username">Username</label>:</div>  
                <div class="form_widget"><input type="text" id="username" name="_username" /></div>  
            </div>  
            <div class="form_item">  
                <div class="form_label"><label for="password">Password</label>:</div>  
                <div class="form_widget"><input type="password" id="password" name="_password" /></div>  
            </div>  
            <div class="form_button">  
                <input type="submit" id="_submit" name="_submit" value="Log In" />  
            </div>  
        </form>  
    </div>  
<?php $view['slots']->stop() ?>  
