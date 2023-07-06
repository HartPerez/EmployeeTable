<?php

$this->extend('layout/main');
$this->section('body');

?>

<h1>Edit Employee</h1>

<form action="/Employees/update/<?= $Employees['ID']; ?>" method="post" enctype="multipart/form-data" >

    <style>
        h1 {
            margin-bottom: 15px;
        }

        .form-label {
            margin: 10px
        }

        /* .mb-3 .column {border-radius: 5px; border: none; width: 33%; padding: 5px 12px; outline: none;} */
        select {
            width: 100%;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            outline: none;
        }
    </style>

    <div class="mb-3">
        <label for="EmployeeName" class="form-label">Employee Name</label>
        <input type="text" class="form-control" name="EmployeeName" value="<?= $Employees['Employee_Name']; ?>" placeholder="Last Name       
                           First Name      
                                 Middle Name">
    </div>
    <!-- <div class="mb-3" >
        <label for="EmployeeName" class="form-label">Employee Name</label><br>
            <input type="text" class="column" name="EmployeeName" placeholder="Last Name"> 
            <input type="text" class="column" name="EmployeeName" placeholder="First Name"> 
            <input type="text" class="column" name="EmployeeName" placeholder="Middle Name"> 
    </div> -->

    <div class="mb-3">
        <label for="EmployeeAddress" class="form-label">Employee Address</label>
        <input type="text" class="form-control" name="EmployeeAddress" style="margin-bottom: 30px;" value="<?= $Employees['Employee_Address']; ?>" >
    </div>

    <div class="same">
        <div class="mb-3">
            <label for="EmployeeNumber" class="form-label">Employee Number</label>
            <div class="form-group mt-2 d-inline-block">
                <span class="border-end country-code px-2 ">+63</span>
                <input type="text" class="form-control" name="EmployeeNumber" value="<?= $Employees['Employee_Number']; ?>" placeholder="9514789356" pattern="[0-9]{10}" required>
            </div>
        </div>
        <style>
            .form-group {
                border: 1px solid #ced4da;
                border-radius: 6px;
                width: auto;
            }

            .form-group input {
                display: inline-block;
                width: auto;
            }

            .same {
                display: flex;
                align-items: baseline;
                place-content: space-between;
            }
        </style>

        <div class="mb-3">
            <div class="form-group" style="border: none; ">
                <label for="EmployeeGender" class="form-label">Employee Gender</label>
                <input type="text" class="form-control" name="EmployeeGender" placeholder="Male/Female" value="<?= $Employees['Employee_Gender']; ?>" pattern="Male||Female" required>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group" style="border: none; ">
                <label for="EmployeeBirthdate" class="form-label">Employee Birthdate</label>
                <input type="date" class="form-control" name="EmployeeBirthdate" value="<?= $Employees['Employee_Birthdate']; ?>"required>
            </div>
        </div>
    </div>
    <!-- <div class="mb-3">
        <label for="EmployeeGender" class="form-label">Employee Gender</label><br>
        <select class="mb-3" name="EmployeeGender" value="<?= $Employees['Employee_Gender']; ?>">
            <option value="Gender" class="form-control" name="EmployeeGender" ></option>
            <option value="Male" class="form-control" name="EmployeeGender" >Male</option>
            <option value="Female" class="form-control" name="EmployeeGender" >Female</option>
        </select>
    </div> -->

    <!--  -->
    <!-- <div class="mb-3">
        <label for="EmployeeBirthdate" class="form-label">Employee Birthdate</label>
        <input type="text" class="form-control" name="EmployeeBirthdate">
    </div> -->


    <div class="mb-3">
        <label for="EmployeeProfile" class="form-label">Employee Profile</label>
        <input type="file" class="form-control" name="EmployeeProfile" value="<?= $Employees['Employee_Profile']; ?>">
    </div>

    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #3cb047;">
        Save
    </button>
    <a href="/Employees" class="btn btn-primary">Home</a>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" >
                <div class="modal-header" style="background-color: #3cb047;">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: white">ALERT!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    Save Changes!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #3cb047;">Save</button>
                </div>
            </div>
        </div>
    </div>

</form>



<?php $this->endSection(); ?>