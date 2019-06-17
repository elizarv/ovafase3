//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=4; attempts=0; attemptsMax=3;
var score=0; scoreMax=4; scoreInc=1; scoreDec=1
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
var fResp="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Felicidades!"; messageTime="Se acabo el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="No hay mas intentos"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="aW5UZXN0MTYwNjIwMTkxOTE3MDQ"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var tags=["Una agencia de autos quiere realizar un software para realizar las ventas, la agencia requiere almacenar los datos de los clientes, asi como de los diferentes modelos de autos y trabajadores de la empresa. A la agencia solo le interesa llevar el seguimiento de cuantos clientes son atendidos por los vendedores y cuantos carros son vendidos.<br>Cuales de los siguientes corresponden a las entidades del software descrito anteriormente:","Identificador único de un objeto dentro del modelo entidad-relación:","La clave foránea genera la relación entre tablas, y debe estar estrictamente relacionada con:","Cuándo hablamos de cardinalidad, estamos hablando de:"];
var answers1=["MUNsaWVudGU","MVZlbmRlZG9y","MUF1dG8","MFByb3ZlZWRvcg","MEF0aWVuZGU","MENvbXByYXI","MEZhY3R1cmE"];
var answers2=["MUNsYXZlIHByaW1hcmlh","MENsYXZlIGZvcuFuZWE","MENsYXZlIPpuaWNh","MENsYXZlIGNvbXB1ZXN0YQ"];
var answers3=["MVVuYSBjbGF2ZSBwcmltYXJpYQ","MFVuYSBjbGF2ZSBmb3LhbmVh","MFVuYSB0YWJsYQ","MFVuYSBlbnRpZGFk"];
var answers4=["MVRpcG8gZGUgcmVsYWNp824gZW50cmUgZW50aWRhZGVz","MENhbnRpZGFkIGRlIGN1YW50b3Mgb2JqZXRvcyBwdWVkZW4gcGVydGVuZWNlciBhIHVuYSB0YWJsYQ","MEV4Y2x1c2l2aWRhZCBlbnRyZSBlbnRpZGFkZXM","MEN1YW50YXMgZW50aWRhZGVzIGNvcnJlc3BvbmRlbiBhIG90cmE"];
var ans=[answers1,answers2,answers3,answers4];
var err=["Error","Error","Error","Error"];
var ima=["","","",""];
var mp4=["","","",""];
var ogv=["","","",""];
var indexTag=0; actualAnswers=[]; dirMedia="inTest16062019191704_resources/media/";
var tiRandOrder=false;
var iT=0;var r_order=[];
