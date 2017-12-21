<?php

namespace app;


use app\model\User;

class UserController
{
      public function create()
      {
         //return file_get_contents('app/view/product/new-user.tpl');
          (new TemplateEngineController('new-user'))->echooutput();
      }
    public function store() : string
    {

        print_r($_POST);
        print_r($_FILES['picture']);

        $data= $_POST;
        $destination='uploads/' . $_FILES['picture']['name'];


        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $data['picture']=$destination;


        $model = new User();
        $model->create($data);

        //User::create($_POST);
        //(new User())->create($_POST);

//        $model = new User();
//        $model ->create($_POST);

        //Redirected to list
        header('Location:?view=user&action=list');
    }

    public function list()
    {
        $model = new User();
        $result = $model->list();

        $header= '';
        $data='';

        foreach ($result as $item)
        {
            if( $header== '')
            {
                foreach ($item as $key => $value)
                {
                    $header .='<th>' . $key . '</th>';
                }
            }

            $data .='<tr onclick="window.location=\'?view=user&action=edit&id=' . $item['id'] . '\'" >';

//            $data .= '<a href="?view=product&action=edit&id=' . $item['id'] . '" >';




            foreach ($item as $key => $value)
            {
                if ($key == 'picture')
                    $data .='<td><img src="' . $value . '" width="200px" ></td>';

                else
                    $data .='<td>' . $value . '</td>';
            }
            $data .='</tr>';

        }


        $template= new TemplateEngineController('table-list');

        $template->set('header', $header);
        $template->set('data', $data);

        $template->echooutput();


    }

    public function edit()
    {
        $model = new User();
        $result = $model->find($_GET['id']);
        $record = null;
        foreach ($result as $value)
        {
            $record = $value;
        }

        if (!$record)
            die ('Record not found');

        $template = new TemplateEngineController('edit-user');
        $template->set('id', $record['id']);
        $template->set('surname', $record['surname']);
        $template->set('name', $record['name']);
        $template->set('birth_date', $record['birth_date']);
        $template->set('position', $record['position']);
        $template->set('more', $record['more']);
        $template->set('picture', $record['picture']);

        $template->set('gender_' . $record['gender'], 'selected');

        $template->echooutput();

    }

    public function update()
    {
        $model= new User();
        $model->update($_GET['id']);

        header('Location:?view=user&action=list');
        exit();
    }

    public function delete()
    {
        $model= new User();
        $model->delete($_GET['id']);
        print_r($_GET);
        header('Location:?view=user&action=list');
        exit();
    }

}