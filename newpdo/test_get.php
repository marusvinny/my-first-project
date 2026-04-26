<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle1.css">
        <style>
            #dei{
                background-color: green;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
            }
             #dei1{
                background-color: green;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
            }
            .buio{
                background-color: lightgreen;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: white;
               
            }
          
              .buioi{
                background-color: lightgreen;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: black;
            }
            .demo:hover {
             background-color: lightgreen;
             text-align: center;
            }
            h1:hover{
    background-color: yellow;
    color: black;
    }
        </style>
    </head>
    <html>
        <body>         
       <div>
      <h1 id="dei">Marus web seervice </h1>
      <h3 id="dei">Marus web seervice </h3><br>
        questa  è <input id="dei1"> <button  type="submit" onclick="marus();"> try </button>  
            
          <p id="demo" class="demo"> Qua esce il risultato</p>
          </div>
    <script>
       function marus(){
        var color = document.getElementById("demo").style;
        
        color.backgroundColor = "red";
        
        var text = document.getElementById("dei1").value;
         document.getElementById("demo").innerHTML= text ;
       }     
    </script>
    <br>
        <form method="post" action="test_get.php" >
            <textarea name="testo" class="buioi" style="width: 800px"  ></textarea>
            <button type="submit">try</button>            
        </form>
        <?php
        echo "<br><h1 class='buio'> The original text  </h1></br>";        
    // $text = isset($_POST['testo']) ? $_POST['testo'] : $_POST['testo'] = $val;
    function test_input($data) {
  $data = trim($data,"[/&,.:]");
  $data = stripslashes($data);
 // $data = htmlspecialchars($data);
  return $data;
}


// testo valido

    if($_POST["testo"]== "" ){
     $text = "please scrivi";
      echo "qui " . $text  ."<br>";
      
    } else { $text = $_POST["testo"];
 
     $_SESSION['testo']=$text;
        function Mytext($value){
        $_SESSION['text']=$value;
         $text = $_SESSION['text'];
        echo " The original text  : <b>" . htmlspecialchars($text)  . "</b><br>";
        }
        
         // if ($text == ""  ){ $text = "ciao come";}
   // else {$text = $_POST['testo'];}
        Mytext($text);
        
        $newtext = explode(" ", $text); // trasforma  la stinga in un array
        $string = explode(" " , $text);
        echo "<br> <b>queto è il risultato  = </b>  ";
        
        $paroleproibite = fopen("text.txt","r");
        //var_dump($paroleproibite);
        function getline($paroleproibite){
        while(! feof($paroleproibite)) {
  $line = fgets($paroleproibite);
  //echo $line. "<br>";
}
      return $line;  }
    
        $paroleproibite = getline($paroleproibite);
       //echo "<br> da qui --------->" . $paroleproibite . "<br>"; stringa trovata nel file di testo  
        $paroleproibite = explode(" ", $paroleproibite);
      // var_dump($paroleproibite);
        //$arayparole = array("merda" , "coglione", "nemico", "guerra","deficiente","ignorante", "ç");
        $arayparole = $paroleproibite;      
       $count = str_word_count($_POST['testo']);
       function control ($newtext,$count , $string ,$arayparole ){
       
        for ($e = 0 ; $e < count($arayparole); $e++){
        //echo "<br> parole  cercate-----". $arayparole[$e];
        for($i= 0; $i < $count ; $i++){
         if ($newtext[$i] == "è" ){ $newtext[$i] = str_replace($newtext[$i], "e",$newtext[$i]);}
        $newtext[$i]= trim($newtext[$i],"[.,%/&£@]");//test_input($newtext[$i]);//
    
         if ($newtext[$i] == $arayparole[$e] ){
          $newtexttemp = " <b> !!not 😘  allowed!!  </b> ";
         // echo $arayparole[$e] ." <br>";
          $newtext[$i] = $newtexttemp ;
         }
         else
         {
         $v= $newtext;
          //var_dump($newtext);          
         }          
      }
        }
     
      $v = implode(" ", $v);
      return $v;
       }
       
     $string = control($newtext,$count,$string,$arayparole);
   
   //var_dump($string);
     
     $string = explode(" " , $string);
  echo "<br><h1 class='buio'> The text without the insults   </h1></br>";
  echo "<b> new text _---> </b>  : ";
for ($ult = 0 ; $ult < count($string); $ult++){
 
 echo " " . $string[$ult]  ; 
}
    }   
function volte (){  static $numero=0; echo  $numero += 1; }
             
       ?>
       <br>
        <?php
        
   function counter(){
    static $counter = -1;
    echo $counter;
    $counter++;
    
   }
   echo "<br> counter  vinny :";
   if ($_SERVER["REQUEST_METHOD"]= "POST"){
   counter(); counter(); counter(); 
   }
   echo "<br>";
  echo str_word_count($_SESSION['testo']);
  echo "<br>";

       ?>
 <?php
 echo "<br>";

$a = array (112,8,4,6,10,45,11,3,99,5,78,67,345);
echo count($a);
echo "<br>";
 $a[4]= 5666;// questo modifi un valore di un array  this update the value
echo "<br>"; //va a capo new line aome time /n but it does not work on evry browser 
for($im=0; $im < count($a); $im++){
echo " , " . $a[$im];
}
echo "<br>";
sort($a);//funzione costruita interna PHP" builtin function"
for($im=0; $im<count($a); $im++){
echo " , " . $a[$im];
}
//$a = array (112,8,4,6,10,45,11,3,99,5,78,97,345);
function sorti($aray){
$a=$aray;
 $len= count($aray);
 for($r=0; $r <$len; $r++){
for($x=0; $x < $len-1; $x++){
if($a[$x] > $a[$x+1]){
$temp = $a[$x];
$a[$x]=$a[$x+1];
$a[$x+1]=$temp;
//echo  " , " . $a[$x];
}
}
//echo "<br>";
}
return $a;
}
 $a= sorti($a);

 for ($in=0; $in<count($a); $in++){
 
 echo "<br>," . $a[$in];
 }
echo "<br>";
?>
 <?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a>$b)?-1:1;
}

//$a=array(4,2,8,6);
usort($a,"my_sort");

foreach ($a as $x=>$x_value){

echo " ,$x_value";
}
/*$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo " , " . $a[$x];
  
  }*/
  $d = array ("a" , "c","b","d");
  
  //sort($d);
  $d= sorti($d);
  for ($s=0; $s<count($d); $s++){
echo "<br>" . $d[$s];
}
echo "<br>" . chr(55);
?>
  <p id="demo"> codice javascript</p><p id="demouno"> codice javascript</p>
  <p id="demodue"> codice javascript</p>
  <p id="dio"></p>
<script>
    function arr(){
    var a = [112,8,4,6,10,45,11,3,99,5,78,97,345,123e-5];
    var Llenf = a.length;
   
    var i , text ,temp , e;
    for(e=0; e<Llenf; e++){
    for(i=0; i<Llenf-1; i++){
        if(a[i]< a[i+1]){
            temp=a[i];
            a[i]=a[i+1];
            a[i+1]=temp;
        }
    }    
    }
       return  a;  
    }
    text = arr();
    
    
     document.getElementById("demouno").innerHTML=  text;  
var s = new Date().getDay();
var day;
switch(s){
    case 0 :
        day = "Sunday";
        break;
        case 1:
            day="Moonday";
            break;
            case 2:
                day="Tuesday";
                break;
            case 3:              
                day="Wednesday";
                break;
            case 4:
                day= "Thursday";
                break;
            case 5:
                day="Friday";
                break;
            case 6:
                day="Saturday";
                    
}
document.getElementById("demodue").innerHTML= "Today is " + " . " + day;

var car ={ prodoct:"fiat ".
modello:"duna",
txt : "questo & <br>",

fulname : function(){
    return this.txt + " " +this.modello + " " + this.prodoct ;}};
 function cos(a,b){return a*b};

   
function my_function(){
     var str = "Hello baby";
   var e = /[elb]/g;
    var a = str.match(e);
    return a;
}
function  marusi()
{ var g = "<?php echo $text ?>";
    var tet = " non  vi  sono mio dii  che ce dai fino alla fine dei giorno";
    var a = tet.slice(tet.indexOf(g),tet.indexOf("giorno"));
   
    return a;
}
var Person ={
    fulname : function (city, country){
    return this.firstname + " " + this.lastname + "live in " + city + " " + country;
}}
var Person1 = {
    firstname : "Mario",
    lastname : "Marus",
    
}

document.getElementById("dio").innerHTML= Person.fulname.call(Person1,"Fanna", "Italy") ;

</script>

        </body>
        
        
    </html>

