<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>
        <span>Les Commentaires en php</span>
        <?php
            //this is a php comment
            /*this is a multipleline comment*/
            #this anther way of making a comment
            $prenom = 'naoual';

            echo '<h5> HELLO PHP ' .$prenom . '</h5>'; //mthd-1

            echo "<h1> HELLO PHP   {$prenom} </h1>"; //mthd-2


            
        ?>
    </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Et quidem blanditiis praesentium nulla  <?php echo " {$prenom};" ?>cumque perspiciatis esse consequuntur ipsum sed molestias?</p> 

    <?php
        $number = 15 ;
        $nom = 'ELADNANI' ;
        $note = 16.50 ;
        $etudiant = true ;
        $etudiants=["naoual","hiba","fatij","mouna"];
        $student=['nom'=>"ELADNANI",'prenom'=>"NAOUAL",'group'=>"DD106",'age'=>"22ans"];
        $studentss=[
            ['nom'=>"ELADNANI",'prenom'=>"NAOUAL",'group'=>"DD106",'age'=>"22ans"],
            ['nom'=>"MRIBEH",'prenom'=>"HIBA",'group'=>"DD106",'age'=>"19ans"],
            ['nom'=>"OUIHRANI",'prenom'=>"HAKIMA",'group'=>"DD104",'age'=>"27ans"],
            ['nom'=>"ELFAOUZ",'prenom'=>"NADA",'group'=>"RI101",'age'=>"23ans"],   
        ];
        $students=[
            'zero'=>['nom'=>"ELADNANI",'prenom'=>"NAOUAL",'group'=>"DD106",'age'=>"22ans"],
            'un'=>['nom'=>"MRIBEH",'prenom'=>"HIBA",'group'=>"DD106",'age'=>"19ans"],
            'deux'=>['nom'=>"OUIHRANI",'prenom'=>"HAKIMA",'group'=>"DD104",'age'=>"27ans"],
            'trois'=>['nom'=>"ELFAOUZ",'prenom'=>"NADA",'group'=>"RI101",'age'=>"23ans"],   
        ];
        $posts=[
            ''=>[''=>"",''=>"",''=>"",''=>""],
            ''=>[''=>"",''=>"",''=>"",''=>""],
            ''=>[''=>"",''=>"",''=>"",''=>""],
            ''=>[''=>"",''=>"",''=>"",''=>""],   
        ];
        $matier = array("html","css");
    ?>

    <!-- les types des variables -->
    <?php
        $number1=20;
        $number2=15;
        $number3='10';
        $note = 16.50 ;
        

        var_dump($number3);
        $note=(int)($note);
        echo "<br>";
        echo $note;

        $number2=(string)($number2);
        echo $number2;
        echo "<br>";

        $number1=(bool)($number1);
        var_dump($note);
        echo "<br>";

        $result = $number3 + $number1;
        echo $result;
        echo "<br>";


    // les fonction en php

       

    ?>


    <?php
        function ClcMoyenne($N1,$N2){
            return ($N1+$N2)/2;
        }

        // $result=ClcMoyenne(24,22);
        // echo $result;

    
    ?>
    <?php

        $decision="";
        $couleurDicision="";
        $moyenne=ClcMoyenne(16,14 );
            if ($moyenne>=10){
                $decision="Admis";
                $couleurDicision="Cbleu";
            }else if ($moyenne>=8 && $moyenne<10){
                $decision="Redoublant";
                $couleurDicision="Cgreen";
            }else if ($moyenne<8){
                $decision="Eliminer";
                $couleurDicision="Cred";
            }
            
        
    ?>
    <div class="<?php echo $couleurDicision ?>">
            <?php
                echo "<br>";
                echo $moyenne;
                echo $decision;
            ?>

    </div>
    
    <?php
    function incrementer(){
        static $i = 0;
        echo $i;
        $i++;
    }
    incrementer();
    incrementer();
    incrementer();
    ?>    
    <div>
        <?php
            // var_dump($number);
            // echo '<br>';
            // var_dump($nom);
            // echo '<br>';
            // var_dump($note);
            // echo '<br>';
            // var_dump($etudiant);
            // echo '<br>';
            // var_dump($etudiants);
            // echo '<br>';
            // var_dump($matier);
            // echo '<br>';

            // echo $etudiants[2];   

        // les tableaus asociative
            echo $student['prenom'];
            echo '<br>';
            echo $student['age'];
            echo '<br>';
            echo $students['deux']['group'];
            echo '<pre>';
            var_dump($students['un']);
            echo '<pre>';

        

        ?> 
    </div>
    <hr>
    <!-- les conditions -->
    <?php
        $logged = true;
        $today = date('N');
    ?>
    <div>
        <?php if($logged == true):?>
            <div>welcome</div>
        <?php else :?>
            <div>login in</div>
        <?php endif ;?>
    </div>
    <div>
        <?php
            switch($today){
                case 1 :
                    echo "lundi";
                    break;
                case 2 :
                    echo "mardi";
                    break;
                case 3 :
                    echo "mercredi";
                    break;
                case 4 :
                    echo "jeudi";
                    break;
            }
        ?>
    </div>

    <hr>
    <!-- les bucles -->
    <div>
        <?php
            for($i=0;$i< count($studentss);$i++){
                echo $studentss[$i]['nom'].'<br>';
            }
            //
            echo '<br>';
            
            foreach($studentss as $std ){
                echo $std['prenom']. ' _ ';
            }
        ?>
    </div>
    
</body>
</html>
