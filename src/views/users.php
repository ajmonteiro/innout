<main class="content">
    <?php
        renderTitle(
            'Registo de funcionários',
            'Manter os dados atualizados',
            'icofont-users'
        );

        include(TEMPLATE_PATH . '/messages.php');
    ?>

    <a href="saveUser.php" class="btn btn-warning btn-lg">Novo Utilizador</a>

    <table class="table table-bordered table-striped table-hover mt-3">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de admissão</th>
            <th>Data de demissão (Caso)</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->start_date ?></td>
                    <td><?= $user->end_date ? $user->end_date : '-' ?></td>
                    <td>
                        <a href="saveUser.php?update=<?= $user->id ?>" class="btn btn-warning rounded-circle mr-3"><i class="icofont-edit"></i></a>
                        <a href="apagar.php?delete=<?= $user->id ?>" class="btn btn-danger rounded-circle"><i class="icofont-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>