<?php

namespace App\Admin\Controllers;

use App\Models\Direktori;
use App\Models\Pengguna;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DirektoriPenelitianController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Direktori Jurnal';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Direktori());

        if (!Admin::user()->isAdministrator()) {
            $grid->model()->where('id_user', Admin::user()->id);
        }

        $grid->column('nama', __('Nama'));
        $grid->column('judul_jurnal', __('Judul jurnal'));
        $grid->column('tahun_terbit', __('Tahun terbit'));
        $grid->column('anggaran', __('Anggaran'))->display(function ($rp) {
            return "Rp. " . number_format($rp, 2, ',', '.');
        });
        $grid->column('progress')->progressBar();
        $grid->column('created_at', __('Dibuat Pada'))->display(function ($create) {
            return \Carbon\Carbon::parse($create)->translatedFormat('l, d F Y');
        });
        // $grid->column('updated_at', __('Diubah Pada'))->display(function ($update) {
        //     return \Carbon\Carbon::parse($update)->translatedFormat('l, d F Y');
        // });

        if (Admin::user()->id == 1) {
            $grid->disableCreateButton();

            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
        }

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('nama');
            $filter->like('judul_jurnal');
        });

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
        $show = new Show(Direktori::findOrFail($id));

        // $show->field('pengguna.name', __('Nama'));
        $show->field('nama', __('Nama'));
        $show->field('judul_jurnal', __('Judul jurnal'));
        $show->field('tahun_terbit', __('Tahun terbit'));
        $show->field('file', __('File'));
        $show->field('anggaran', __('Anggaran'))->unescape()->as(function ($rp) {
            return "Rp. " . number_format($rp, 2, ',', '.');
        });
        $show->field('created_at', __('Created at'))->unescape()->as(function ($dibuat) {
            return \Carbon\Carbon::parse($dibuat)->translatedFormat('l, d F Y');
        });
        $show->field('updated_at', __('Updated at'))->unescape()->as(function ($diubah) {
            return \Carbon\Carbon::parse($diubah)->translatedFormat('l, d F Y');
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Direktori());

        $form->hidden('id_user', __('ID User'))->value(Admin::user()->id);
        $form->text('nama', __('Nama'));
        $form->text('judul_jurnal', __('Judul jurnal'));
        $form->number('tahun_terbit', __('Tahun terbit'));
        $form->file('file', __('File'));
        $form->slider('progress', __('Progress Kerja'))->options(['max' => 100, 'min' => 1, 'step' => 1, 'postfix' => 'progress']);
        $form->currency('anggaran', __('Anggaran'));

        return $form;
    }
}
