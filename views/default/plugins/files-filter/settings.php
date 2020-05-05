<?php 

// SW Social Web LLC
// SW Social Web Rules!!!

$filter_setting = $vars['entity']->enable_filter;

$images_filter_setting = $vars['entity']->allow_images;


$document_filter_setting = $vars['entity']->filter_documents;



$excel_filter_setting = $vars['entity']->excel_filter;
$mp3_filter_setting = $vars['entity']->mp3_filter;
$pdf_filter_setting = $vars['entity']->pdf_filter;



echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:settings'),
    'name' => 'params[enable_filter]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => true,
    'value' => $filter_setting,
]);


if ($filter_setting == 1)
{ 
    
    echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:image:settings'),
    'name' => 'params[allow_images]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => false,
    'value' => $images_filter_setting,
]);
    
    
    echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:documents:settings'),
    'name' => 'params[filter_documents]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => false,
    'value' => $document_filter_setting,
]);
    
    
?> 


<p>
  <b>Permitir documentos Excel?</b>

<?php

echo elgg_view('input/dropdown',array(
'name' => 'params[excel_filter]', 
'options_values'=> array( '0' => '  ', '1'=>'Yes','2'=>'No'),
'value'=> $excel_filter_setting));

 ?>
</p>

<p>
  <b>Permitir archivos PDF?</b>

<?php

echo elgg_view('input/dropdown',array(
'name' => 'params[pdf_filter]', 
'options_values'=> array( '0' => '  ', '1'=>'Yes','2'=>'No'),
'value'=> $pdf_filter_setting));

 ?>
</p>


<p>
  <b>Permitir archivos MP4?</b>

<?php

echo elgg_view('input/dropdown',array(
'name' => 'params[mp3_filter]', 
'options_values'=> array( '0' => '  ', '1'=>'Yes','2'=>'No'),
'value'=> $mp3_filter_setting));

 ?>
</p>


<?php
}
?>