<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeesModel;


class EmployeesController extends BaseController
{
    public function index()
    {
        $fetchEmployees = new EmployeesModel();
        $data['Employees'] = $fetchEmployees->findAll();

        return view('Employees\list', $data);
    }

    public function createEmployees()
    {
        
        return view('Employees\add');
    }

    public function storeEmployees()
    {
        $insertEmployees = new EmployeesModel();

        if($img = $this->request->getFile('EmployeeProfile')){
            if($img->isValid() && ! $img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }

        $data = array(
            'Employee_Name' => $this->request->getPost('EmployeeName'),
            'Employee_Address' => $this->request->getPost('EmployeeAddress'),
            'Employee_Number' => $this->request->getPost('EmployeeNumber'),
            'Employee_Gender' => $this->request->getPost('EmployeeGender'),
            'Employee_Birthdate' => $this->request->getPost('EmployeeBirthdate'),
            'Employee_Profile' => $imageName,
        );

        $insertEmployees->insert($data);

        return redirect()->to('/Employees')->with('success', 'Employee Added Successfully');
    }

    public function editEmployees($ID)
    {
        $fetchEmployees = new EmployeesModel();
        $data['Employees'] = $fetchEmployees->where('ID', $ID)->first();

        return view('Employees\edit', $data);
    }

    public function updateEmployees($ID)
    {
        $updateEmployees = new EmployeesModel();
        $db = db_connect();

        if($img = $this->request->getFile('EmployeeProfile')){
            if($img->isValid() && ! $img->hasMoved()){
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }
        if(!empty($_FILES['EmployeeProfile']['name'])){
            $db->query("UPDATE table_employees SET Employee_Profile = '$imageName' WHERE ID ='$ID' ");
        }
 
        $data = array(
            'Employee_Name' => $this->request->getPost('EmployeeName'),
            'Employee_Address' => $this->request->getPost('EmployeeAddress'),
            'Employee_Number' => $this->request->getPost('EmployeeNumber'),
            'Employee_Gender' => $this->request->getPost('EmployeeGender'),
            'Employee_Birthdate' => $this->request->getPost('EmployeeBirthdate'),
        );

        $updateEmployees->update($ID, $data);

        return redirect()->to('/Employees')->with('success', 'Employee Updated Successfully');

    }

    public function deleteEmployees($ID)
    {
        $deleteEmployees = new EmployeesModel();
        $deleteEmployees->delete($ID);
        
     
        return redirect()->to('/Employees')->with('success', 'Employee Deleted Successfully');
    }

    public function searchEmployees($ID)
    {
        $searchEmployees = new EmployeesModel();
        
    }
    
}
