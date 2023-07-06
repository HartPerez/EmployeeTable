<?php

$this->extend('layout/main');
$this->section('body');

?>

<h1>Add Employee</h1>

<form action="/Employees/store" method="post" enctype="multipart/form-data" id="form" onsubmit="employee(event)">

    <style>
        h1 {
            margin-bottom: 15px;
        }

        .form-label {
            margin: 10px
        }

        .mb-3 .column {
            border-radius: 5px;
            border: none;
            width: 33%;
            padding: 5px 12px;
            outline: none;
        }


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
        <input type="text" class="form-control" name="EmployeeName" placeholder="Last Name       
                           First Name      
                                 Middle Name" id="name" required>
    </div>
    <!-- <div class="mb-3">
        <label for="EmployeeName" class="form-label" >Employee Name</label><br>
        <input type="text" class="column" name="EmployeeName" id="lastname" placeholder="Last Name">
        <input type="text" class="column" name="EmployeeName" id="firstname" placeholder="First Name">
        <input type="text" class="column" name="EmployeeName" id="middlename" placeholder="Middle Name"> 
    </div> -->

    <div class="mb-3">
        <label for="EmployeeAddress" class="form-label">Employee Address</label>
        <input type="text" class="form-control" name="EmployeeAddress" style="margin-bottom: 30px;" id="address" required>
    </div>

    <!-- <div class="mb-3">
        <label for="EmployeeNumber" class="form-label">Employee Number</label>
        <input type="tel" class="form-control" name="EmployeeNumber" placeholder="Ex. 09674521354" id="number" pattern="[0-9]{10}" required>
    </div> -->

    <div class="same">
        <div class="mb-3">
            <label for="EmployeeNumber" class="form-label">Employee Number</label>
            <div class="form-group mt-2 d-inline-block">
                <span class="border-end country-code px-2 ">+63</span>
                <input type="text" class="form-control" id="number" name="EmployeeNumber" placeholder="9514789356" pattern="[0-9]{10}" required>
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
                <input type="text" class="form-control" name="EmployeeGender" placeholder="Male/Female" id="gender" pattern="Male||Female" required>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group" style="border: none; ">
                <label for="EmployeeBirthdate" class="form-label">Employee Birthdate</label>
                <input type="date" class="form-control" name="EmployeeBirthdate" id="birthdate" required>
            </div>
        </div>
    </div>

    <!-- <div class="mb-3">
        <label for="EmployeeGender" class="form-label">Employee Gender</label><br>
        <select class="mb-3" name="EmployeeGender" >
        <option value="Gender" disabled selected name="EmployeeGender"></option>
        <option value="Male" name="EmployeeGender" >Male</option>
        <option value="Female" name="EmployeeGender" >Female</option>
        </select>
    </div> -->

    <div class="mb-3">
        <label for="EmployeeProfile" class="form-label">Employee Profile</label>
        <input type="file" class="form-control" name="EmployeeProfile" id="profile" required>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #3cb047;">
        Submit
    </button>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3cb047;">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: white">ALERT!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    Do you want to add this Data!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #3cb047;">Add Employee</button>
                </div>
            </div>
        </div>
    </div>

    <a href="/Employees" class="btn btn-primary">Home</a>
</form>

<!-- <script>
    function employee(event) {
        event.preventDefault();

        const form = document.getElementById('form');
        var com1 = document.getElementById("name").value;
        var com2 = document.getElementById("address").value;
        var com3 = document.getElementById("number").value;
        var com4 = document.getElementById("gender").value;
        var com5 = document.getElementById("birthdate").value;
        var com6 = document.getElementById("profile").value;

        if (com1 === "" || com2 === "" || com3 === "" || com4 === "" || com5 === "" ||
            com6 === "") {
            alert("You must fill out all the field!");
        } else {
            form.submit();
        }
    }
</script> -->



<!-- <script>
    function employee(event) {
        event.preventDefault();

        const form = document.getElementById('form');
        var com2 = document.getElementById("address").value;
        var com3 = document.getElementById("number").value;
        var com4 = document.getElementById("gender").value;
        var com5 = document.getElementById("birthdate").value;
        var com6 = document.getElementById("profile").value;

        var lastName = document.getElementById('lastname').value;
        var firstName = document.getElementById('firstname').value;
        var middleName = document.getElementById('middlename').value;
        var employeeName = lastName + ', ' + firstName + ' ' + middleName;
        document.getElementsById('lastname').value = employeeName;

        if (lastName === "" || firstName === "" || middleName === "" || com2 === "" || com3 === "" || com4 === "" || com5 === "" || com6 === "") {
            alert("You must fill out all the fields!");
        } else {
            form.submit();
        }
    }
</script> -->

<?php $this->endSection(); ?>