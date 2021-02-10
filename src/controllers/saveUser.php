<?php
    session_start();
    requireValidSession(true);
    loadModel('WorkingHours');
    loadModel('User');

    $expection = null;

    $userData = [];
    
    if(count($_POST) === 0 && isset($_GET['update'])) {
        $user = User::getOne(['id' => $_GET['update']]);
        $userData = $user->getValues();
        $userData['password'] = '';
    }
    
    if(!empty($_POST)) {
        try {
            $dbuser = new User($_POST);
            if($dbuser->id) {
                $dbuser->update();
                addSuccessMsg('Utilizador atualizado com sucesso');
                header('Location: users.php');
                exit;
            }
            $dbuser->insert();
            addSuccessMsg('Utilizador registado com sucesso');
            $_POST = [];
        } catch(Exception $e) {
            $expection = $e;
        } finally {
            $userData = $_POST;
        }
    }

    loadTemplateView('saveUser',  $userData + ['exception' => $expection]);
?>