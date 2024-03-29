<main class="content">
    <?php
        renderTitle(
            "Relatório de Gestão",
            'Resumo de horas dos funcionários',
            'icofont-chart-histogram'
        );
    ?>

    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icofont-users"></i>
            <p class="title">Quantidade de funcionários</p>
            <h3 class="value"><?= $activeUsersCount ?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icofont-patient-bed"></i>
            <p class="title">Faltas dos funcionários</p>
            <h3 class="value"><?= count($absentUsers) ?></h3>
        </div>
        <div class="summary-box bg-warning">
            <i class="icofont-sand-clock"></i>
            <p class="title">Horas Mensais</p>
            <h3 class="value"><?= $hoursInMonth ?> Horas</h3>
        </div>
    </div>

    <?php if(count($absentUsers) > 0): ?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Funcionários em falta - <?= date('d/m/Y') ?></h4>
                <p class="card-category">Relação dos funcionários que ainda não bateram ponto</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php foreach($absentUsers as $name): ?>
                            <tr>
                                <td><?= $name ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>
</main>