<?php $this->view('includes/header') ?>

<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 310px;">
        <h3 class="text-center">Solihiyn School</h3>
        <img class="d-block mx-auto my-3 border border-primary rounded w-100" src="<?=ASSETS?>/img/logo4-rm2.png" alt="Site logo">
        <h3>Add User</h3>
        <input class="my-2 form-control" type="text" name="firstname" placeholder="First Name" autofocus>
        <input class="my-2 form-control" type="text" name="lastname" placeholder="Last Name">
        <input class="my-2 form-control" type="email" name="email" placeholder="Email">
        <select class="my-2 form-control" name="" id="">
            <option value="">--Select a Gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select class="my-2 form-control" name="" id="">
            <option value="">--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="reception">Reception</option>
            <option value="lecturer">Lecturer</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>
        <input class="my-2 form-control" type="text" name="password" placeholder="Password">
        <input class="my-2 form-control" type="text" name="password2" placeholder="Retype Password">
        <br>
        <button class="btn btn-primary float-end">Add User</button>
        <button class="btn btn-danger text-white">Cancel</button>
    </div>
</div>

<?php $this->view('includes/footer') ?>
