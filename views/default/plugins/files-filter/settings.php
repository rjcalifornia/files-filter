<?php 

// SW Social Web LLC
// SW Social Web Rules!!!

$filter_setting = $vars['entity']->enable_filter;

$images_filter_setting = $vars['entity']->allow_images;


$document_filter_setting = $vars['entity']->filter_documents;



$spreadsheets_filter_setting = $vars['entity']->filter_spreadsheets;

$video_filter_setting = $vars['entity']->filter_video;
$pdf_filter_setting = $vars['entity']->filter_pdf;



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
    
    
    
    echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:spreadsheets:settings'),
    'name' => 'params[filter_spreadsheets]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => false,
    'value' => $spreadsheets_filter_setting,
]);
    
    
    echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:pdf:settings'),
    'name' => 'params[filter_pdf]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => false,
    'value' => $pdf_filter_setting,
]);
    
    echo elgg_view_input('select',[
    
    'label' => elgg_echo('files-filter:video:settings'),
    'name' => 'params[filter_video]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('files-filter:yes'),
                '2' => elgg_echo('files-filter:no'),
                
                
        
	),
    'required' => false,
    'value' => $video_filter_setting,
]);
    

}
