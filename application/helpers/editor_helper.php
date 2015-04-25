<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	function editerGetEnConfig() {

    $config = array(
        "fullPage" => false,
        "extraPlugins" => 'docprops,autogrow,tableresize',
        "enterMode" => "CKEDITOR.ENTER_BR",
        "shiftEnterMode" => "CKEDITOR.ENTER_P",
        "autoGrow_maxHeight" => 300,
        "skin" => 'kama',
        "language" => 'en',
        "jqueryOverrideVal" => true,
        //"toolbar"=>$toolbar,
        "removePlugins" => 'resize',
		"filebrowserBrowseUrl" => base_url()."ckfinder/ckfinder.html",
		"filebrowserImageBrowseUrl" =>  base_url()."ckfinder/ckfinder.html?type=Images",
		"filebrowserFlashBrowseUrl" => base_url()."ckfinder/ckfinder.html?type=Flash",
		"filebrowserUploadUrl"=> base_url()."ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
		"filebrowserImageUploadUrl" =>  base_url()."ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
		"filebrowserFlashUploadUrl" => base_url()."ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"
		);
    return $config;
}
function loadEditer() {
    $obj = & get_instance();

    if (isset($obj->ckeditor))
        return;

    if (!class_exists('CKEditor')) {
        require_once FCPATH . 'ckeditor/ckeditor.php';
    }
    if (!class_exists('CKFinder')) {
        require_once FCPATH . APPPATH . 'third_party/ckfinder/ckfinder.php';
    }
    $obj->ckeditor = new CKeditor(base_url() . "ckeditor/");
    $obj->ckeditor->returnOutput = true;

    $obj->ckfinder = new CKFinder(site_url("/ckfinder/"));
    $obj->ckfinder->SetupCKEditor($obj->ckeditor, site_url("/ckfinder/"));
}

function editerGetDefaultConfig() {

    $config = array(
        "fullPage" => false,
        "extraPlugins" => 'docprops,autogrow,tableresize',
        "enterMode" => "CKEDITOR.ENTER_BR",
        "shiftEnterMode" => "CKEDITOR.ENTER_P",
        "autoGrow_maxHeight" => 800,
        "skin" => 'kama',
        "language" => 'vi',
        "jqueryOverrideVal" => true,
        //"toolbar"=>$toolbar,
        "removePlugins" => 'resize'
    );
    return $config;
}




loadEditer();