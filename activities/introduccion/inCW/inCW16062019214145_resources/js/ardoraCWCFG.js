//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=1; attempts=0; attemptsMax=4;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1;
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=false;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=true;
var tiScore=false;
var startTime; var tiAudio=false;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fDefs="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Muy bien"; messageTime="Se acabó el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="No hay más intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="aW5DVzE2MDYyMDE5MjE0MTQ1"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var col=0; row=0; writeDir=0;
var cw=[["Qw","TA","QQ","Uw","RQ","Uw","","","","",""],["","","","RQ","","","","","","",""],["","","","Qw","","","","","","",""],["","","","VQ","","","","","","",""],["Qg","QQ","Uw","RQ","RA","RQ","RA","QQ","VA","Tw","Uw"],["","","","Tg","","","","","","",""],["","","","Qw","","","","","","",""],["","","","SQ","","","","","","",""],["","","Qw","QQ","Uw","Tw","RA","RQ","VQ","Uw","Tw"],["","","","","","","","","","",""]];
var x1=[1,4,3,1];
var y1=[1,1,9,5];
var x2=[6,4,11,11];
var y2=[1,9,9,5];
var imaCW=["","","",""];
var audioCW=["","","",""];
var defCW=["Diagrama que permite visualizar las relaciones entre las clases existentes dentro del sistema.","Diagrama de la representación gráfica de los pasos que se siguen dentro de una actividad.","Diagrama que representa la interacción del sistema con el cliente.","Diagrama que  gráfica las relaciones entre las entidades del sistema."];
var colNum=11;
var rowNum=10;
