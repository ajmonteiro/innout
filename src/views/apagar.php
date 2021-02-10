<main class="content">
    <?php
       renderTitle(
           'Apagar funcionário',
           'Apagar o seu funcionário',
           'icofont-trash'
       );

       include(TEMPLATE_PATH . '/messages.php');
    ?>

    <div class="col-md-6">
    <table class="table table-bordered table-striped table-hover">
       <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Inicio</th>
            <th>Data de Demissão</th>
            <th>Is Admin?</th>
       </thead>
       <tbody>
            <?php foreach($userApagar as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->start_date ?></td>
                    <td><?= $user->end_date ? $user->end_date : '-----' ?></td>
                    <td><?= $user->is_admin === '1' ? 'Sim' : 'Não' ?></td>
                </tr>
            <?php endforeach ?>
       </tbody>
    </table>
    </div>
    <p class="ml-3">Deseja realmente apagar o funcionário <?= $user->name ?>?</p>

    <form action="" method="post">
        <div class="col-md-4">
            <button type="submit" name="submit" class="btn btn-primary mt-1">Sim</button>
        </div>
    </form>
    <a href="users.php" class="btn btn-secondary ml-3 mt-1">Cancelar</a>
</main>