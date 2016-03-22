<div class="page">
    <div class="container">
        <div class="col-md-12 detail">  
            <h3 class="tittle">Login Please</h3>
            <div class="col-sm-12">   
                <div class="contact-form">
                    <div class="col-sm-6">  
                        <?php echo form_open('web/sign_in_', array('name' => "frmLogin_", 'id' => "frmLogin_", 'class' => 'comment-form-author', 'style' => 'width: 100%')); ?>
                        <p class="comment-form-author"><label for="author">Username<span class="mendatory1">*</span></label>
                            <?php
                            $data = array(
                                'type' => 'text',
                                'required' => 'required',
                                'class' => 'textbox',
                                'name' => 'txtUsr',
                                'id' => 'txtUsr',
                                'placeholder' => 'Username here...',
                                'class' => 'search-text',
                                'style' => 'width: 100%'
                            );
                            echo form_input($data);
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-6">  
                        <p class="comment-form-author"><label for="author">Password<span class="mendatory1">*</span></label>
                            <?php
                            $data = array(
                                'type' => 'password',
                                'required' => 'required',
                                'class' => 'textbox',
                                'name' => 'txtPwd',
                                'id' => 'txtPwd',
                                'placeholder' => 'Password here...',
                                'class' => 'search-text'
                            );
                            echo form_input($data);
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"> 
                        <div class="col-sm-6"> 
                            <p style="float: left; color: #ff0000" id="login_msg"></p>
                            <?php
                                $data = array(
                                    'name' => 'submit',
                                    'type' => 'submit',
                                    'class' => 'col-sm-12',
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
                                    'class' => 'col-sm-12',
                                    'value' => 'Reset'
                                );
                                echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <p>&nbsp;</p>
            </div>
            <div class="col-md-4">
                <?php //$this->load->view('templates/imageCrousel');  ?>
            </div>        
            <div class="clearfix"> </div>
        </div>
    </div>
</div>