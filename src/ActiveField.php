<?php

namespace alexeevdv\adminlte;

use yii\helpers\Html;

class ActiveField extends \yii\widgets\ActiveField
{

    public function ckeditor($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeTextArea($this->model, $this->attribute, $options);

        return $this;
    }

}
