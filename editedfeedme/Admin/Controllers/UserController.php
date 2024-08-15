<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\user;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new user());

        $grid->column('userID', __('UserID'));
        $grid->column('userName', __('UserName'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
        $grid->column('userlocation', __('Userlocation'));
        $grid->column('userRole', __('UserRole'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(user::findOrFail($id));

        $show->field('userID', __('UserID'));
        $show->field('userName', __('UserName'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('userlocation', __('Userlocation'));
        $show->field('userRole', __('UserRole'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new user());

        $form->number('userID', __('UserID'));
        $form->text('userName', __('UserName'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->text('userlocation', __('Userlocation'));
        $form->text('userRole', __('UserRole'));

        return $form;
    }
}
