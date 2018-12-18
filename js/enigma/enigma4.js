alert("EMPEZAMOS EL JUEGO");
//Variables y Funciones globales
var cerox = 340;
var ceroy = 51;
var paredx = 600+cerox;
var paredy = 400+ceroy;
var velocidad = 7;
var puntosj1 = 0;
var puntosj2 = 0;
var p1 = document.getElementById("puntosj1");
var p2 = document.getElementById("puntosj2");

function getX(id){
 var objeto = document.getElementById(id);
 var pos = objeto.style.left;
 console.log(pos);
 var l = pos.length;
 console.log(l);
 pos = pos.substring(0,l-2);
 pos = parseInt(pos);
 console.log(pos);
 return pos;
}

function getY(id){
 var objeto = document.getElementById(id);
 var pos = objeto.style.top;
 var l = pos.length;
 pos = pos.substring(0,l-2);
 pos = parseInt(pos);
 return pos;
}

function ponerxy(id,x,y){
 var objeto = document.getElementById(id);
 objeto.style.left = x+"px";
 objeto.style.top = y+"px";
}

//Pelota
var xpdir = 1;
var ypdir = 1;
ponerxy("bola", 260+cerox, 260+ceroy);
function Pelota(){
 var posx = getX("bola");
 var posy = getY("bola");
 posx+=xpdir;
 posy+=ypdir;
 if(posx <= cerox){
  xpdir = 1;
 }
 if(posx >= (paredx-20)){
  xpdir = -1;
 }
 if(posy <= ceroy){
  ypdir = 1;
 }
 if(posy >= (paredy-20)){
  ypdir = -1;
 }
 ponerxy("bola", posx,posy);
}

//Barco
/*codigo ascci flechas
| 38 | (Arriba) |
| 40 | (Abajo) |
| 37 | (Izqierda) |
| 39 | (Derecha) |*/

var xj1dir = 0;
var xj2dir = 0;
var y1 = 20 + ceroy;
var y2 = 360 + ceroy;



ponerxy("j1", 260+cerox, y1);
ponerxy("j2", 260+cerox, y2);
function mover(event){
 var c = event.keyCode;
 switch(c){
  case 65 ://65
   xj1dir = -1;
   break;
  case 68 ://68
   xj1dir = 1;
   break;
  case 37 ://37
   xj2dir = -1;
   break;
  case 39 ://39
   xj2dir = 1;
   break;
 }
}
function parar(event){
 var c = event.keyCode;
 if(c == 65 || c == 68){
  xj1dir = 0;
 }
 if(c == 37 || c == 39){
  xj2dir = 0;
 }
}
function Barco(){
var pos1 = getX("j1");
 pos1+=xj1dir;

 if(pos1 <= cerox){
  ponerxy("j1", cerox, y1);
 }
 if(pos1 >= (paredx-80)){
  ponerxy("j1", (paredx-80),y1);
 }
 if(pos1 >= cerox && pos1 <= (paredx-80)){
  ponerxy("j1", pos1, y1);
 }
 
 var pos2 = getX("j2");
 pos2+=xj2dir;

 if(pos2 <= cerox){
  ponerxy("j2", cerox, y2);
 }
 if(pos2 >= (paredx-80)){
  ponerxy("j2", (paredx-80),y2);
 }
 if(pos2 >= cerox && pos2 <= (paredx-80)){
  ponerxy("j2", pos2, y2);
 }
 
}

//Choques
function choque(){
 if(getY("bola") == (getY("j1")+20)){
  if(getX("bola") >= getX("j1") && getX("bola") <= (getX("j1")+80)){
   ypdir = 1;
   //Prisioneros recuperados j1
   puntosj1++;
   p1.innerHTML = puntosj1;

  }
 }
 
 if(getY("bola") == (getY("j2")-20)){
  if(getX("bola") >= getX("j2") && getX("bola") <= (getX("j2")+80)){
   ypdir = -1;
   //prisioneros recuperados j2
   puntosj2++;
   p2.innerHTML = puntosj2;
  }
 }
}
//Funcion principal del juego
function main(){
 Pelota();
 Barco();
 choque();
}
setInterval("main();", velocidad);