<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xavi
 * Date: 6/15/13
 * Time: 8:49 AM
 * To change this template use File | Settings | File Templates.
 */
?>


<!-- CONTACT -->


<div id="contactus" class="container-fluid apiumcontactfluid">

    <div class="container">
        <h3>Questions?<cite>Contact us, it's free and worthy!</cite></h3>
        <form class="span8 offset2">
            <p class="text-right"><small>*All fields are mandatory</small></p>

            <!-- ejemplo de input con error -->
            <div class="control-group error">
                <label class="control-label" for="inputError">Please, write your name</label>
                <div class="controls">
                    <input class="span8" type="text" placeholder="Name" id="inputName">
                </div>
            </div>

            <!-- ejemplo de input bien cumplimentado que se comprueba en el momento y le da feedback inmediato al usuario -->
            <div class="control-group success">
                <label class="control-label" for="inputSuccess">Well done! This is a valid email</label>
                <div class="controls">
                    <input class="span8" type="text" placeholder="Email" id="inputEmail">
                </div>
            </div>

            <input class="span8" type="text" placeholder="Phone" id="inputPhone">
            <select class="muted span8" type="text" placeholder="How did you know about us?" id="inputFind">
                <option value="" class="muted">How did you know about us?</option>
                <option value="Searching on Internet">Searching on Internet</option>
                <option value="Someone's recommendation">Someone's recommendation</option>
                <option value="Through Linkedin">Through Linkedin</option>
                <option value="Through Apium's blog">Through Apium's blog</option>
                <option value="Through Apium's twitter">Through Apium's twitter</option>
                <option value="Others">Others</option>
            </select>
            <textarea class="span8" placeholder="Message" id="inputMessage" type="text" rows="2"></textarea>

            <!-- message sent successfuly -->
            <div class="alert alert-success clearfix text-center">
                <b>Your message is on us right now!</b> Thanks for contacting! We'll be in touch in a sigh! :)
            </div>

            <button class="span8 btn btn-primary" type="submit">Send</button>
        </form>
    </div><!-- end container -->
</div><!-- end container contact fluid -->