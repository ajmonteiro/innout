<?php
    session_start();
    requireValidSession(true);
    loadModel('User');
    loadModel('WorkingHours');

   
    $errors = [];
  
    $exception = null;
        if(isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $userApagar = User::get(['id' => $id]);
        }
  
    if(!empty($_POST)) {
        if(isset($_GET['delete'])) {
            try {
                User::deleteById($_GET['delete']);
                addSuccessMsg('Funcionário excluído com sucesso.');
                header('Location: users.php');
                exit;
            } catch(Exception $e) {
                    if(stripos($e->getMessage(), 'FOREIGN KEY')){
                        addErrorMsg('Não é possível excluir um utilizador com registos de ponto');
                    } else {
                    $exception = $e;
                    }
            }
        }
    }
        
    


    loadTemplateView('apagar', $_POST + [
        'userApagar' => $userApagar,
        'exception' => $exception,
        'errors' => $errors
    ]);
?>