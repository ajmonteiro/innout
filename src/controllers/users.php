<?php
    session_start();
    requireValidSession(true);
    loadModel('User');
    loadModel('WorkingHours');

    $users = User::get();
    // print_r($users);
    foreach($users as $user):
        $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
        if($user->end_date):
            $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
        endif;
    endforeach;

    

    loadTemplateView('users',['users' => $users]);
?>