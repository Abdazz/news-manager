<?php

if(!function_exists("getImageName")){
    function getImageName($imageName="sample.jpeg")
    {
        if(!empty($imageName) AND $imageName!=null AND $imageName!=""){
            return $imageName;
        }
        else{
            return "sample.jpeg";
        }
    }
}

if(!function_exists("get")){
    function get($nodeObject, $propertie)
    {
        if(isset($nodeObject->get('properties')[$propertie]))
        return $nodeObject->get('properties')[$propertie];
        else
        return "";
    }
}

if(!function_exists("getNodeType")){
    function getNodeType($type)
    {
        if($type == "Devis"){
            return "dc:devis";
        }
        elseif($type=="Facture"){
            return "dc:devis";
        }
        elseif($type=="Offre"){
            return "dc:offre";
        }
        else
        {
            return "cm:content";
        }
    }
}

if(!function_exists("getNodeIcon")){
    function getNodeIcon($node){
        if($node->get("isFolder"))
            return 'folder.png';
        else{

            $file_extension = pathinfo($node->get("name"), PATHINFO_EXTENSION);

            $doc_extensions=["doc", "docx", "odt"];
            $xlsx_extensions=["xls", "xlsx"];
            $audio_extension=["mp3"];
            $video_extension=["mp4"];
            $images_extension=["png", "jpeg", "jpg"];

            if(in_array($file_extension, $doc_extensions))
                $docIcon="docFile.png";
            elseif(in_array($file_extension, $xlsx_extensions))
                $docIcon="xlsxFile.png";
            elseif(in_array($file_extension, $audio_extension))
                $docIcon="audioFile.png";
            elseif(in_array($file_extension, $video_extension))
                $docIcon="videoFile.png";
            elseif(in_array($file_extension, $images_extension))
                $docIcon="imgFile.png";
            else
                $docIcon="txtFile.png";


            return $docIcon;
        }
    }
}


