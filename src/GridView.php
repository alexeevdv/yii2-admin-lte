<?php

namespace alexeevdv\adminlte;

class GridView extends \yii\grid\GridView
{
    public $layout = '
        <div class="box">
            <div class="box-header">
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        {items}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><div class="dataTables_paginate">{pager}</div></div>
                </div>
            </div>
        </div>
    ';

    public $summaryOptions = [
        'class' => 'dataTables_info',
    ];

    public $tableOptions = [
        'class' => 'table table-striped table-bordered dataTable',
    ];

    public function init()
    {
        parent::init();

        \alexeevdv\adminlte\assets\GridView::register($this->getView());
    }
}

