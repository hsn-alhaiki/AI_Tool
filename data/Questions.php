<?php
 'Model/Question.php';

$questions = [
    new Question("What system do you prefer?", ["Windows", "Mac (macOS)"]),
    new Question("What are you going to use the PC for?", ["Designing", "Gaming", "Office tasks", "Development", "Engineering"]),
    new Question("How would you rate your skill level or your working load?", [
        "Designing" => ["Beginner", "Expert", "Professional"],
        "Gaming" => ["Casual Player", "Streamer player", "Professional player"],
        "Office Tasks" => ["Light usage", "Heavy usage", "Professional"],
        "Development" => ["Beginner level", "Intermediate level or advanced", "Professional"],
        "Engineering" => ["Beginner level", "Intermediate level or advanced", "Professional"],
    ]),
    new Question("How would you describe your working environment?", ["On desk", "Moving around"]),
    new Question("What software will you be using?", [
        "Designing" => ["Adobe Photoshop", "Adobe Illustrator", "Adobe InDesign", "After Effect", "Canva", "Sketch", "Figma", "Blender", "ZBrush", "Premiere Pro", "Character Animator", "Animate", "Audition", "Lightroom", "Adobe Fresco", "Affinity Designer", "Affinity Photo", "CorelDRAW", "Pixlr", "Krita", "InkScape", "Vectr", "GIMP"],
        "Gaming" => ["2D Games (Stardew Valley, Cuphead, ...)", "3D cartoon games (Crash Bandicoot, Genshin Impact, ...)", "3D realistic games (The Witcher, Assassin's Creed, ...)", "Shooting games (CS:GO, Valorant, ...)"],
        "Office Tasks" => ["Microsoft Office 365", "Browsing"],
        "Developing" => ["VS Code", "Visual Studio", "IntelliJ", "PyCharm", "Eclipse", "Arduino", "Xcode", "XAMPP", "Docker", "Godot", "Unreal Engine", "Unity", "Adobe Dreamweaver", "VMware", "Power BI", "WordPress", "Postman", "Swagger", "Notepad++", "Atom", "Sublime Text", "Vim", "WebStorm", "Android Studio"],
        "Engineering" => ["AutoCad", "Revit", "Civil 3D", "AutoCad LT", "Inventor", "Fusion 360", "Naviswork", "3Ds MAX", "Maya", "Arnold", "Mudbox", "ShotGrid", "SOLIDWORKS", "MATLAB", "STAAD PRO", "Microsoft project", "Microstation", "Bluebeam Revu", "Sketchup", "MathCad"],
    ]),
];




