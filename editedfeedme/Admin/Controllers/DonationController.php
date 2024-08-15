<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Donation;

class DonationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Donation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Donation());

        $grid->column('donationID', __('DonationID'));
        $grid->column('userID', __('UserID'));
        $grid->column('userRole', __('UserRole'));
        $grid->column('donationImagepath', __('DonationImagepath'));
        $grid->column('donationItemname', __('DonationItemname'));
        $grid->column('donationQuantity', __('DonationQuantity'));
        $grid->column('donationUnit', __('DonationUnit'));
        $grid->column('donationExpirydate', __('DonationExpirydate'));
        $grid->column('donationLocation', __('DonationLocation'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        
        
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
        $show = new Show(Donation::findOrFail($id));

        $show->field('donationID', __('DonationID'));
        $show->field('userID', __('UserID'));
        $show->field('userRole', __('UserRole'));
        $show->field('donationImagepath', __('DonationImagepath'));
        $show->field('donationItemname', __('DonationItemname'));
        $show->field('donationQuantity', __('DonationQuantity'));
        $show->field('donationUnit', __('DonationUnit'));
        $show->field('donationExpirydate', __('DonationExpirydate'));
        $show->field('donationLocation', __('DonationLocation'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Donation());

        $form->number('userID', __('UserID'));
        $form->text('userRole', __('UserRole'));
        $form->text('donationImagepath', __('DonationImagepath'));
        $form->text('donationItemname', __('DonationItemname'));
        $form->decimal('donationQuantity', __('DonationQuantity'));
        $form->text('donationUnit', __('DonationUnit'))->default('kgs');
        $form->text('donationExpirydate', __('DonationExpirydate'));
        $form->text('donationLocation', __('DonationLocation'));

        return $form;
    }
}
