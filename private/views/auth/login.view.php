<?php $this->view("includes/header") ?>

<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 310px;">
        <h3 class="text-center">Solihiyn School</h3>
        <img class="d-block mx-auto my-3 border border-primary rounded w-100" src="<?=ASSETS?>/img/logo4-rm2.png" alt="Site logo">
        <h3>Login</h3>
        <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
        <br>
        <input class="form-control" type="password" name="password" placeholder="Password">
        <br>
        <button class="btn btn-primary">Login</button>
    </div>
</div>

<?php $this->view("includes/footer") ?>
