//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=6; attempts=0; attemptsMax=1;
var score=0; scoreMax=6; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=1;
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
var timeOnMessage=2; messageOk="Muy bien"; messageTime="Se acabó el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="No hay más intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var txt_G=["Q29uanVudG8gZGUgbGFzIGRpZmVyZW50ZXMgZXRhcGFzIHBvciBsYXMgcXVlIGRlYmUgcGFzYXIgdW4gc29mdHdhcmUgcGFyYSBsb2dyYXIgc3UgY29ycmVjdG8gZnVuY2lvbmFtaWVudG8u","TGEgZXRhcGEgZW4gbGEgcXVlIHNlIGV4dHJhZW4gbG9zIHJlcXVpc2l0b3MgZGVsIHByb2R1Y3RvIGVzIGxhIGV0YXBhIGRlOg","RXRhcGEgZW4gbGEgcXVlIHNlIHV0aWxpemEgbGEgaW5mb3JtYWNp824gcmVjb2xlY3RhZGEgcGFyYSBkaXNl8WFyIHVuIG1vZGVsbyBvIGxhcyBlc3BlY2lmaWNhY2lvbmVzIGRlbCBwcm9kdWN0byB5IHN1cyBjb21wb25lbnRlLg","QXNlZ3VyYXIgcXVlIGxvcyBjb21wb25lbnRlcyBpbmRpdmlkdWFsZXMgZGVsIHNpc3RlbWEgY3VtcGxhbiBjb24gbGFzIGVzcGVjaWZpY2FjaW9uZXMgaGFjZSBwYXJ0ZSBkZSBsYSBldGFwYSBkZTo","TW9kZWxvIGRlIGNpY2xvIGRlIHZpZGEgZW4gZWwgcXVlIG5vIHNlIHB1ZWRlIGF2YW56YXIgYSBsYSBkaWd1aWVudGUgZXRhcGEgc2luIGhhY2VyIHRlcm1pbmFkbyB0b2RhcyBsYXMgdGFyZWFzIGRlIGxhIGV0YXBhIGFudGVyaW9yLg","TW9kZWxvIHF1ZSBjb25zaXN0ZSBkZSB1biBjb25qdW50byBkZSBjaWNsb3MgcHJvZ3Jlc2l2b3MgZW4gbG9zIGN1YWxlcyBzZSBpZGVudGlmaWNhbiBsb3Mgb2JqZXRpdm9zLCBwcm9wdWVzdGFzIHkgYWx0ZXJuYXRpdmFzIGRlIGltcGxlbWVudGFjafNuLg"];
var img_G=["","","","","",""];
var mp3_G=["","","","","",""];
var ogg_G=["","","","","",""];
var n_G=["MQ","Ng","Mg","Mw","NA","NQ"];
var e_G=["Error","Error","Error","Error","Error","Error"];
var mp4_G=["","","","","",""];
var ogv_G=["","","","","",""];
var txtGr=["CICLO DE VIDA","ANÁLISIS Y DISEÑO","PRUEBAS","CASCADA","ESPIRAL","REQUERIMIENTOS"];
var imgGr=["0_ciclodevida.jpg","0_desarrollo.jpg","0_450_1000.jpg","0_ciclos.jpg","0_359px-ModeloEspiral.svg.png","0___ndice.jpg"];
var mp3Gr=["","","","","",""];
var oggGr=["","","","","",""];
var ram_G=[-1,-1,-1,-1,-1,-1];
var messageErrorG="Error";
var dirMedia="inClasi23062019134210_resources/media/"; var indexGame="0"; var tiAudio=false;
var wordsGame="aW5DbGFzaTIzMDYyMDE5MTM0MjEw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
