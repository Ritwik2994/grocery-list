<?php 

namespace App\Controllers;
use App\Models\GroceryModel;

class Dashboard extends BaseController
{

    // Dashbaord Display
	public function index()
	{

        $groceryModel = new GroceryModel();
        $data['groceries'] = $groceryModel->findAll(); //assigning all data that grocery table have to data
		

		echo view('components/header');
		echo view('dashboard', $data);  // passing data into the view
		echo view('components/footer');
    }

    // Display List of all the data 
    public function list()
    {
        $groceryModel = new GroceryModel();
        $data['groceries'] = $groceryModel->findAll();
        echo view('components/header');
		echo view('list', $data);
		echo view('components/footer');
    }
    
    // Add new grocery list
    public function add()
    {
        echo view('components/header');
		echo view('add');
		echo view('components/footer');
    }


    // Save the newly added list into the database
    public function save()
    {
        $groceryModel = new GroceryModel();
        $_POST['item_status'] = isset($_POST['item_status']);
        $groceryModel->insert($_POST);
        return $this->response->redirect(site_url('dashboard'));
    }

    // Delete the list using id of that particular element
    public function delete($id)
    {

        $groceryModel = new GroceryModel();
        $groceryModel->delete($id);
        return $this->response->redirect(site_url('dashboard'));
    }

    // Edit view. Use to edit the data
    public function edit($id)
    {
        $groceryModel = new GroceryModel();
        // $data['grocery'] = $groceryModel->find($id);
        $data['grocery'] = $this->groceryModel->where('id',$id)->first();  // assigning the first elemnet when the id encountered
        echo view('components/header');
		echo view('edit', $data);
		echo view('components/footer');
    }

    // updates the data into the database
    public function update()
    {
        $groceryModel = new GroceryModel();
        $_POST['item_status'] = isset($_POST['item_status']);
        $groceryModel->update($_POST['id'], $_POST);
        session()->setFlashdata('success','Data Updated Successfully');
        return $this->response->redirect(site_url('dashboard'));
    }

}