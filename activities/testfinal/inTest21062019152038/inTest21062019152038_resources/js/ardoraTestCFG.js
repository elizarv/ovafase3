//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=10; attempts=0; attemptsMax=0;
var score=0; scoreMax=10; scoreInc=1; scoreDec=0
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=false;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=true;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fResp="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Muy bien"; messageTime="Se acabó el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="No hay más intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="aW5UZXN0MjEwNjIwMTkxNTIwMzg"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var tags=["Diagrama de la representación gráfica de los pasos que debe seguir una actividad dentro del sistema.","Diagrama que representa la interacción del sistema con el cliente.","Los requerimientos que tienen que ver con la funcionalidad del software son:","La imágen hace referencia a un diagrama de:","El modelo de ciclo de vida representado por la imágen, en el cuál se deben terminar todas las tareas de una actividad para poder continuar con la siguiente, se llama:","En un diagrama de caso de uso, las clase que representa formularios o vistas preliminares de llama:","La imágen representa la clase que relaciona la interfaz con las tablas, dentro de un diagrama de caso de uso, esta clase se llama:","El identificador único de un objeto dentro del diagrama de base de datos se denomina:","Cuando se habla del conjunto de etapas por las que debe pasar un software para lograr su correcto funcionamiento, hablamos de:","La etapa del ciclo de vida en la que se asegura el cumplimiento de especificaciones de cada componente individualmente, se llama:"];
var answers1=["MVNlY3VlbmNpYQ","MEJhc2UgZGUgZGF0b3M","MENhc28gZGUgdXNv","MENsYXNlcw"];
var answers2=["MUNhc28gZGUgdXNv","MFNlY3VlbmNpYQ","MFJlcXVlcmltaWVudG9z","MENsYXNlcw"];
var answers3=["MUZ1bmNpb25hbGVz","ME5vIGZ1bmNpb25hbGVz","MERlbCBzaXN0ZW1h","MERlIHNvZnR3YXJl"];
var answers4=["MVNlY3VlbmNpYQ","MENhc28gZGUgdXNv","MEJhc2UgZGUgZGF0b3M","MENsYXNl"];
var answers5=["MUNhc2NhZGE","MEl0ZXJhdGl2bw","MEVzcGlyYWw","MFRyYWRpY2lvbmFs"];
var answers6=["MUNsYXNlIGJvcmRl","MENsYXNlIGVudGlkYWQ","MENsYXNlIGNvbnRyb2w","MENsYXNlIHVzdWFyaW8"];
var answers7=["MUNsYXNlIGNvbnRyb2w","MENsYXNlIGVudGlkYWQ","MENsYXNlIGludGVyZmF6","MENsYXNlIGJvcmRl"];
var answers8=["MUNsYXZlIHByaW1hcmlh","MENsYXZlIPpuaWNh","MENsYXZlIGZvcuFuZWE","MENsYXZlIGNvbXB1ZXN0YQ"];
var answers9=["MUNpY2xvIGRlIHZpZGE","MERpYWdyYW1hIGRlIHNlY3VlbmNpYQ","ME1vZGVsbyBjYXNjYWRh","ME1vZGVsbyBpdGVyYXRpdm8"];
var answers10=["MUV0YXBhIGRlIHB1ZWJhcw","MEV0YXBhIGRlIGFu4Wxpc2lzIHkgZGlzZfFv","MEV0YXBhIGRlIGNvbnN0cnVjY2nzbg","MEV0YXBhIGRlIHJlY29waWxhY2nzbiBkZWwgcmVxdWlzaXRvcw"];
var ans=[answers1,answers2,answers3,answers4,answers5,answers6,answers7,answers8,answers9,answers10];
var err=["Error","Error","Error","Error","Error","Error","Error","Error","Error","Error"];
var ima=["","","","diag_secuencia.png","ciclos.jpg","","control_secuencia.PNG","","",""];
var mp4=["","","","","","","","","",""];
var ogv=["","","","","","","","","",""];
var indexTag=0; actualAnswers=[]; dirMedia="inTest21062019152038_resources/media/";
var tiRandOrder=true;
var iT=0;var r_order=[];
var r_ans=[];var r_pos=[];var r_checks=[];var minSuccesses=10;
