//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=18; attempts=0; attemptsMax=5;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=false;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=true;
var tiScore=false;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Respuesta correcta"; messageTime="Se terminó el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="No hay más intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="aW5VbmlyMTYwNjIwMTkxOTIwMTk"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var joinPar=[["Tm8gZnVuY2lvbmFsZXM", "TGEgaW50ZXJmYXogZGViZSBzZXIgYW1pZ2FibGUgcGFyYSBlbCB1c3Vhcmlv"],["Tm8gZnVuY2lvbmFsZXM", "TGEgYXBsaWNhY2nzbiBkZWJlIHBvZGVyIHVzYXJzZSBlbiBkaXNwb3NpdGl2b3MgbfN2aWxlcw"],["RnVuY2lvbmFsZXM", "U2UgZGViZSB2aXN1YWxpemFyIHVuIGhpc3RvcmlhbCBkZSBhY3RpdmlkYWRlcw"],["RnVuY2lvbmFsZXM", "RGVzY2FyZ2FyIGFyY2hpdm9z"],["RnVuY2lvbmFsZXM", "RGVzY2FyZ2FyIGlt4WdlbmVz"],["VXNhYmlsaWRhZA", "Tm8gZnVuY2lvbmFsZXM"],["RXNjYWxhYmlsaWRhZA", "Tm8gZnVuY2lvbmFsZXM"],["U2VndXJpZGFk", "Tm8gZnVuY2lvbmFsZXM"],["UGVybWl0aXIgbG9nIGluIHBvciB0aXBvIGRlIHVzdWFyaW8", "RnVuY2lvbmFsZXM"],["UmVnaXN0cmFyIGFjdGl2aWRhZGVz", "RnVuY2lvbmFsZXM"],["U3ViaXIgYXJjaGl2b3M", "RnVuY2lvbmFsZXM"],["Q29uc3VsdGFyIGFjdGl2aWRhZGVzIHBvciB0aXBv", "RnVuY2lvbmFsZXM"],["TWFudGVuaWJpbGlkYWQ", "Tm8gZnVuY2lvbmFsZXM"],["Q29uc3VsdGFzIHLhcGlkYXMgZGUgbGFzIGFjdGl2aWRhZGVz", "Tm8gZnVuY2lvbmFsZXM"],["TGEgYXBsaWNhY2nzbiBkZWJlIGVzdGFyIGRpc3BvbmlibGUgbGFzIDI0IGhvcmFzIGRlbCBk7WE", "Tm8gZnVuY2lvbmFsZXM"],["RnVuY2lvbmFsZXM", "RW52aWFyIGNvcnJlbyBhIGxvcyB1c3VhcmlvcyByZWdpc3RyYWRvcw"],["RnVuY2lvbmFsZXM", "RW52aWFyIGFsZXJ0YXMgZGUgbGFzIGFjdGl2aWRhZGVzIHByb250YXMgYSByZWFsaXphcg"],["Tm8gZnVuY2lvbmFsZXM", "TGEgYXBsaWNhY2nzbiBkZWJlIHNlciBkZXNwbGVnYWRhIGVuIGxhIG51YmU"]];
var c=[[14,45],[14,55],[11,46],[11,18],[11,18],[10,14],[13,14],[9,14],[35,11],[21,11],[14,11],[30,11],[14,14],[36,14],[56,14],[11,40],[11,52],[14,44]];
var con1=["Usabilidad","Escalabilidad","Seguridad","Permitir log in por tipo de usuario","Registrar actividades","Subir archivos","Consultar actividades por tipo","Mantenibilidad","Consultas rápidas de las actividades","La aplicación debe estar disponible las 24 horas del día"];
var con2=["Funcionales","No funcionales"];
var con3=["La interfaz debe ser amigable para el usuario","La aplicación debe poder usarse en dispositivos móviles","Se debe visualizar un historial de actividades","Descargar archivos","Descargar imágenes","Enviar correo a los usuarios registrados","Enviar alertas de las actividades prontas a realizar","La aplicación debe ser desplegada en la nube"];
var sel1=""; join1=[]; join2=[];
