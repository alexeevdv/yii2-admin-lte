<?php

namespace alexeevdv\adminlte;

use yii\helpers\Html;

class ActiveField extends \yii\widgets\ActiveField
{

    public function tinymce($options = [])
    {
        $htmlOptions = isset($options['htmlOptions']) ? $options['htmlOptions'] : [];

        $options = array_merge($this->inputOptions, $htmlOptions);
        $this->adjustLabelFor($htmlOptions);        
        $this->parts['{input}'] = Html::activeTextArea($this->model, $this->attribute, $htmlOptions);

        $id = Html::getInputId($this->model, $this->attribute);

        \yii::$app->view->registerJS('
            tinymce.init({
                selector: "#'.$id.'",
                "theme": "modern",
                "plugins": [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor",
                    //"jbimages"
                ],
                "external_plugins": {
                    "jbimages": "/js/tinymce/plugins/jbimages/plugin.js",
                    "placeholder": "/js/tinymce/plugins/placeholder/plugin.js",
                },
                convert_newlines_to_brs: false,
                paste_postprocess: function(plugin, args) {
                    args.node.innerHTML = args.node.innerHTML.replace(/(<p><\/p>)/ig, "").replace(/(<p>&nbsp;<\/p>)/ig, "").replace(/<p><br\/?>\s*<\/p>/ig, "");
                },    
                "templates": [],
                "height": 300,
                "language": "ru",
                "language_url": "/js/tinymce/langs/ru.js",
                relative_urls: false,
                "toolbar": "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | print preview media jbimages",
                "image_advtab": "true"
            });
        ');


        return $this;
    }

}
