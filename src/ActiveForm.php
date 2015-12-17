<?php

namespace alexeevdv\adminlte;

use yii\helpers\Html;

class ActiveForm extends \yii\widgets\ActiveForm
{
    public $fieldClass = 'alexeevdv\adminlte\ActiveField';

    public function submitButton($content = 'Сохранить', $options = ['class' => 'btn btn-success'])
    {
        return Html::submitButton($content, $options);
    }

}
