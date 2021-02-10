<main class="content">
    <?php
        renderTitle(
            'Registar Funcionário',
            'Crie e atualize os seus funcionários',
            'icofont-user'
        );

        include(TEMPLATE_PATH . '/messages.php');
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $name ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?>">
                 <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="rPassword">Confirmar Password</label>
                <input type="password" name="rPassword" id="rPassword" placeholder="Confirmar Password" class="form-control <?= $errors['rPassword'] ? 'is-invalid' : ''?>">
                <div class="invalid-feedback">
                    <?= $errors['rPassword'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Inicio</label>
                <input type="date" name="start_date" id="start_date" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date ?>"    >
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Fim (No caso de edição)</label>
                <input type="date" name="end_date" id="end_date" class="form-control <?= $errors['end_date'] ? 'is-invalid' : ''?>" value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="admin">Administrador?</label>
                <input type="checkbox" name="is_admin" id="is_admin" class=" q q<?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= $is_admin ? 'checked' : ''?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Guardar</button>
            <a href="/users.php" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>
