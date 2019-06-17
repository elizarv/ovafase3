//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=7; attempts=0; attemptsMax=5;
var score=0; scoreMax=7; scoreInc=1; scoreDec=1
var typeGame=2;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=false;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=false;
var tiScore=false;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Muy bien"; messageTime="Se acabó el tiempo"; messageError="Error"; messageAttempts="No hay más intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var texSel=0; var doneA=["0","0","0","0","0","0","0"];
var doneB=["-1","-1","-1","-1","-1","-1","-1"];
var posX=[247,241,236,241,234,240,237]; var posY=[43,93,140,194,242,290,340];
var coorx=["MjQy", "MjM2", "MjMx", "MjM2", "MjI5", "MjM1", "MjMy"]; var coory=["NDM", "OTM", "MTQw", "MTk0", "MjQy", "Mjkw", "MzQw"]; var xAnswer=5; answer=[]; rows=6; cols=10; xKey=-1; yKey=-1; animationX=[]; animationY=[]; animationPosX=[]; animationPosY=[]; animationLetter=[];
var al1=["", "Actualizar Notas", "Registrar Notas", "Registrar Notas", "Registrar Notas", "Ver Notas por Estudiante", "Ver Notas por Asignatura"]; var al2=["", "Reportar Notas por Asignatura", "Reportar Notas por Asignatura", "Actualizar Notas", "Actualizar Notas", "", ""]; var al3=["", "Reportar Notas por Estudiante", "Reportar Notas por Estudiante", "Reportar Notas por Estudiante", "Reportar Notas por Asignatura", "", ""]; var al4=["", "", "", "", "", "", ""]; answers=["Ingresar al sistema", "Registrar Notas", "Actualizar Notas", "Reportar Notas por Asignatura", "Reportar Notas por Estudiante", "Ver Notas por Asignatura", "Ver Notas por Estudiante"];indexLetters=0; xSel=-1; ySel=-1; iLetter=-1; jLetter=-1;
var wordsGame="aW5QYW5lbDE2MDYyMDE5MjMwMjA5"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var tiUD=true;
