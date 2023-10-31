<?php

include_once '/xampp/htdocs/AI_Tool/Model/softwareNSpecs.php';

$softwareRecSpecs = array(
    new SoftwareSpecs( "Photoshop", "design",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Illustrator", "design",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "InDesign", "design",array('windows', 'mac'), "i7", "16", "8GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "After Effects", "design",array('windows', 'mac'), "i7", "32", "8GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Sketch", "design",array('mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Blender", "design",array('windows', 'mac', 'linux'), "i5", "8", "8GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "ZBrush", "design",array('windows', 'mac'), "i7", "32", "8GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Premiere Pro","design", array('windows', 'mac'), "i7", "32", "6GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Character Animator", "design",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Audition", "design",array('windows', 'mac'), "i3", "16", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Lightroom", "design",array('windows', 'mac'), "i5", "16", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Fresco", "design",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Affinity Designer","design", array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Affinity Photo", "design",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "IPS")),
    
    new SoftwareSpecs( "CorelDRAW", "design",array('windows'), "i3", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Krita", "design",array('windows', 'mac', 'linux'), "i5", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Inkscape", "design",array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "HDD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "GIMP", "design",array('windows', 'mac', 'linux'), "i3", "2", "4GB", array("Size" => "256GB", "Type" => "HDD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "2D Games","game", array('windows'), "i5", "4", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "3D Cartoon Games","game", array('windows'), "i5", "8", "8GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "3D Realistic Games", "game",array('windows'), "i7", "16", "16GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Shooting Games", "game",array('windows'), "i5", "16", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    //--------------------
    new SoftwareSpecs("Microsoft 365","ot", array('windows'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs("Browsing","ot", array('windows','mac','linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "VS Code","dev", array('windows', 'mac', 'linux'), "i3", "2", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Visual Studio","dev", array('windows', 'mac'), "i5", "16", "N/A", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "IntelliJ", "dev",array('windows', 'mac', 'linux'), "i5", "8", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "PyCharm","dev", array('windows', 'mac', 'linux'), "i5", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Eclipse","dev", array('windows', 'mac', 'linux'), "i5", "16", "N/A", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Arduino","dev", array('windows', 'mac', 'linux'), "N/A", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Xcode","dev", array('mac'), "N/A", "16", "N/A", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "XAMPP","dev", array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Docker", "dev",array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Godot", "dev",array('windows', 'mac', 'linux'), "i5", "4", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Unreal Engine","dev", array('windows', 'mac', 'linux'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Unity", "dev",array('windows', 'mac', 'linux'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Dreamweaver","dev", array('windows', 'mac'), "i5", "4", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "VMware", "dev",array('windows', 'mac', 'linux'), "i7", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Power BI", "dev",array('windows', 'mac'), "i5", "4", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Postman", "dev",array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Swagger", "dev",array('windows', 'mac', 'linux'), "i5", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Notepad++", "dev",array('windows', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),

    new SoftwareSpecs( "Atom", "dev",array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1280x720", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Sublime Text","dev", array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "N/A", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Vim", "dev",array('windows', 'mac', 'linux'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "WebStorm", "dev",array('windows', 'mac', 'linux'), "i5", "8", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "Android Studio", "dev",array('windows', 'mac', 'linux'), "i5", "16", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "N/A")),
    
    new SoftwareSpecs( "AutoCAD", "engineer",array('windows', 'mac'), "i5", "16", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Revit", "engineer",array('windows', 'mac'), "i7", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Civil 3D", "engineer",array('windows'), "i5", "16", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "AutoCAD LT", "engineer",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Inventor", "engineer",array('windows'), "i7", "32", "8GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Fusion 360","engineer", array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Navisworks", "engineer",array('windows', 'mac'), "i5", "8", "N/A", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "3Ds MAX", "engineer",array('windows'), "i7", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Maya", "engineer",array('windows', 'mac'), "i7", "16", "8GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Arnold", "engineer",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Mudbox", "engineer",array('windows', 'mac'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "SOLIDWORKS", "engineer",array('windows'), "i7", "16", "10GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "MATLAB","engineer", array('windows', 'mac', 'linux'), "i5", "16", "4GB", array("Size" => "500GB", "Type" => "N/A"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "STAAD PRO", "engineer",array('windows'), "i5", "8", "4GB", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Microsoft Project", "engineer",array('windows'), "i3", "4", "N/A", array("Size" => "256GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "MicroStation", "engineer",array('windows'), "i5", "16", "8GB", array("Size" => "1TB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "Bluebeam Revu", "engineer",array('windows'), "i5", "8", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "SketchUp", "engineer",array('windows', 'mac'), "i5", "4", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS")),
    
    new SoftwareSpecs( "MathCAD", "engineer",array('windows', 'mac'), "i3", "2", "4GB", array("Size" => "500GB", "Type" => "SSD"), array("Resolution" => "1920x1080", "Tech" => "IPS"))
);


