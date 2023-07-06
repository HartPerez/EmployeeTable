<?php


$this->extend('layout/main');
$this->section('body');

?>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php endif; ?>


<style>
    table,
    tr,
    th,
    td {
        border: 2px solid #615756;
    }

    tbody,
    td,
    .num {
        height: 100px;
        vertical-align: 50%;
        text-align: center;
    }

    img {
        height: 100px;
        object-fit: fill;
        width: 140px;
    }

    thead {
        text-align: center;
        background-color: #1c1c1c;
        color: antiquewhite;
    }

    .heads {
        display: flex;
        white-space: nowrap;
        align-items: baseline;
    }
    
    .table>thead {
        vertical-align: middle;
    }
</style>

<h1 style="margin-top: 31px; margin-bottom: 34px;">List of Employees</h1>


<!-- <a href="/Employees/create" class="btn btn-primary" style="margin: 1%;">Add Employee</a> -->


<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->

<!-- <div class="container mt-4" style="border: 2px solid #615756; ">
    <div class="heads">
        <div class="input-group mb-4 mt-3" style="align-items: center; margin-left: 20px;">
            <div class="form-outline">
                <input type="text" id="searchInput" style="background-size: cover;">
            </div>
            <h6 class="btn btn-primary" id="searchButton" style="margin: 5px;"><b>Search</b></h6>
        </div>
        <a href="/Employees/create" class="btn btn-primary" style="margin-right: 5%;">Add Employee</a>
    </div> -->

<div class="mb-3">
    <form action="/Employees" method="get" class="d-flex">
        <!-- <button class="btn btn-outline-primary" type="submit">Search</button> -->
        <h6  id="searchButton" style="margin: 5px; margin-left: 5%; align-self: center;"><b>Search</b></h6>
        <input type="text" style="width: 50%;" name="search" class="form-control" placeholder="Search" aria-label="Search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
        <a href="/Employees/create" class="btn btn-primary" style="margin-right: 5%; margin-left: 20%;">Add Employee</a>
    </form>
</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Employee Address</th>
                <th scope="col">Employee Number</th>
                <th scope="col">Employee Gender</th>
                <th scope="col">Employee Birthdate</th>
                <th scope="col">Employee Profile</th>
                <th scope="col" style="width: 12%;">Action</th>
            </tr>
        </thead>
        <tbody id="showdata">
            <?php foreach ($Employees as $Employee) :  ?>
                <tr>
                    <th class="num" scope="row"><?= $Employee['ID']; ?></th>
                    <td> <?= $Employee['Employee_Name']; ?></td>
                    <td> <?= $Employee['Employee_Address']; ?></td>
                    <td> <?= $Employee['Employee_Number']; ?></td>
                    <td> <?= $Employee['Employee_Gender']; ?></td>
                    <td> <?= $Employee['Employee_Birthdate']; ?></td>
                    <td> <img src="/uploads/<?= $Employee['Employee_Profile']; ?>" alt="" width="100"> </td>
                    <td>
                        <a href="/Employees/edit/<?= $Employee['ID']; ?>" class="btn btn-primary">Edit</a>
                        <!-- <a href="/Employees/delete/<?= $Employee['ID']; ?>" class="btn btn-danger">Delete</a> -->


                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $Employee['ID']; ?>">
                            Delete
                        </button>


                        <div class="modal fade" id="deleteModal<?= $Employee['ID']; ?>" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #dc3545;">
                                        <h5 class="modal-title" id="deleteModal<?= $Employee['ID']; ?>" style="color: white">ALERT!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure do you want to delete this Data!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a method="post" href="/Employees/delete/<?= $Employee['ID']; ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php $this->endSection(); ?>




