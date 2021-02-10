<main class="content">
    <?php
        renderTitle(
            'Registar Ponto',
            'Mantenha-se consistente',
            'icofont-check-alt'
        );
        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os pontos efetuados hoje</p>
        </div>
        <div class="card-body">
        <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 1: <?= $workingHours->time1 ? $workingHours->time1 : '---' ?></span>
                <span class="record">Saída 1: <?= $workingHours->time2 ? $workingHours->time2 : '---' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 2: <?= $workingHours->time3 ? $workingHours->time3 : '---'  ?></span>
                <span class="record">Saída 2: <?= $workingHours->time4 ? $workingHours->time4 : '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-success btn-lg"><i class="icofont-check mr-1"></i>Dar Entrada/Saída</a>
        </div>
    </div>
    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" class="form-control" name="forcedTime" placeholder="Simular a hora de entrada/saída">
            <button type="submit" class="btn btn-danger ml-3">Simular</button>
        </div>
    </form>
</main>