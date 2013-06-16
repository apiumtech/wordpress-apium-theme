<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xavi
 * Date: 6/15/13
 * Time: 8:49 AM
 * To change this template use File | Settings | File Templates.
 */
?>

<div id="contactus" class="container-fluid apiumcontactfluid">

    <div class="container">
        <h3>Questions?<cite>Contact us, it's free and worthy!</cite></h3>
        <form class="span8 offset2" >

            <input class="span8" type="text" placeholder="Name" ng-model="contactForm.name" required>

            <input class="span8" type="text" placeholder="Email" ng-model="contactForm.mail" required>

            <input class="span8" type="text" placeholder="Phone" ng-model="contactForm.phone">

            <select class="muted span8" placeholder="How did you know about us?" ng-model="contactForm.find" ng-options="s for s in findSources"></select>

            <textarea class="span8" placeholder="Message" rows="3" ng-model="contactForm.message"></textarea>

            <button class="span8 btn btn-primary" type="submit" ng-click="submitContactForm()">Send</button>

        </form>

    </div>
</div>
