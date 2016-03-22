<div class="page">
    <div class="container">
        <div class="row">  
            <h2>Login Please</h2>
            <div class="contact-form">
                <div class="row">  
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">  
                        <?php echo form_open('web/sign_in_', array('name' => "frmLogin_", 'id' => "frmLogin_", 'class' => 'form', 'style' => 'width: 100%')); ?>
                        <p class="comment-form-author"><label for="author">Username<span class="mendatory1">*</span></label>
                            <?php
                            $data = array(
                                'type' => 'text',
                                'required' => 'required',
                                'class' => 'form-control',
                                'name' => 'txtUsr',
                                'id' => 'txtUsr',
                                'placeholder' => 'Username here...',
                                'style' => 'width: 100%'
                            );
                            echo form_input($data);
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="row">  
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">  
                        <p class="comment-form-author"><label for="author">Password<span class="mendatory1">*</span></label>
                            <?php
                            $data = array(
                                'type' => 'password',
                                'required' => 'required',
                                'class' => 'form-control',
                                'name' => 'txtPwd',
                                'id' => 'txtPwd',
                                'placeholder' => 'Password here...',
                                'style' => 'width: 100%'
                            );
                            echo form_input($data);
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="row" style="margin-top:20px;">  
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"> 
                        <div class="col-sm-6"> 
                            <p class="comment-form-author">
                                <?php
                                $data = array(
                                    'name' => 'submit',
                                    'type' => 'submit',
                                    'class' => 'col-xs-12 col-sm-12 btn btn-primary',
                                    'value' => 'Sign in'
                                );
                                echo form_input($data);
                                ?>
                        </div>
                        <div class="col-sm-6"> 
                            <?php
                            $data = array(
                                'name' => 'reset',
                                'type' => 'reset',
                                'class' => 'col-xs-12 col-sm-12 btn btn-danger',
                                'value' => 'Reset'
                            );
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>        
        <div class="clearfix"> </div>
    </div>    
</div>