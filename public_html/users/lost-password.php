<?php require_once( '../couch/cms.php' ); ?>
    <cms:template title='Lost Password' hidden='1' />

    <cms:if k_logged_in >
        <!-- what is an already logged-in member doing on this page? Send back to homepage. -->
        <cms:redirect k_site_link />
    </cms:if>
    
    <!-- are there any success messages to show from previous actions? -->
    <cms:set success_msg="<cms:get_flash 'success_msg' />" />
    <cms:if success_msg >
        <div class="notice">
            <cms:if success_msg='1' >
                A confirmation email has been sent to you<br />
                Please check your email.
            <cms:else />
                Your password has been reset<br />
				Please check your email for the new password.
            </cms:if>
        </div>
    <cms:else />
        
        <!-- now the real work -->
        <cms:set action="<cms:gpc 'act' method='get'/>" />
        
        <!-- is the visitor here by clicking the reset-password link we emailed? -->
        <cms:if action='reset' >
            <h1>Reset Password</h1>
        
            <cms:process_reset_password />
            
            <cms:if k_success >
                 <cms:set_flash name='success_msg' value='2' />
                 <cms:redirect k_page_link />          
            <cms:else />
                <cms:show k_error />
            </cms:if>
        
        <cms:else />
        
            <!-- show the lost-password form -->
            <h1>Forgot Password</h1>

            <cms:form method="post" anchor='0'>
                <cms:if k_success>
                
                    <!-- the 'process_forgot_password' tag below expects a field named 'k_user_name' -->
                    <cms:process_forgot_password />
                    
                    <cms:if k_success>
                        <cms:set_flash name='success_msg' value='1' />
                        <cms:redirect k_page_link /> 
                    </cms:if>    
                </cms:if>
                
                <cms:if k_error >
                    <h3><font color='red'><cms:show k_error /></font></h3>
                </cms:if>
                
                
                Your E-mail: <br/>
                <cms:input type='text' name='k_user_name' /><br/>

                <input type="submit" name="submit" value="Send reset mail"/> 

            </cms:form>
            
        </cms:if>
    </cms:if>    
    
    
<?php COUCH::invoke(); ?>