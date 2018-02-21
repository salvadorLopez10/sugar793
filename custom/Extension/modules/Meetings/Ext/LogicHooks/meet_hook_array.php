<?php
    /**
     * Created by CVV
     * User: carmen.velasco@unifin.com.mx
     * Date: 19/10/2016
     */

$hook_array['after_save'][] = Array(
    1,
    'Create a new Meeting for companion',
    'custom/modules/Meetings/meetings_hooks.php',
    'Meetings_Hooks', // name of the class
    'MeetingAcompaniante'
);