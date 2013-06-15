<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xavi
 * Date: 6/2/13
 * Time: 9:38 PM
 * To change this template use File | Settings | File Templates.
 */
?>


<div id="mainFront">
    <div class="view">

        <ul id="timeline" style="top: -{{screenOnFront}}%;" ng-cloak>

            <li>
                <? require_once "partial_carousellAndTagLine.php" ?>
            </li>

            <li>
                <? require_once "partial_description.php" ?>
            </li>

            <li>
                <? require_once "partial_meetTheTeam.php" ?>
            </li>

            <li>
                <? require_once "partial_contact.php" ?>
            </li>


        </ul>

    </div>
</div>









