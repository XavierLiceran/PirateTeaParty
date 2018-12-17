//Después de cargar todo
$(function(){
    
    var anim_id;

    //Variables referenciales del juego
    var container = $('#shipContainer');

    var player = $('#barcoJugador');
    var colsq = $('#csId');
    var enemy1 = $('#barcoEnemigo');
    var enemy2 = $('#barcoEnemigo2');
    var enemy3 = $('#barcoEnemigo3');

    var rdiv = $('#restart_div');
    var rbutton = $('#restart');
    var score = $('#score');

    var ndiv = $('#next_div');
    var nbutton = $('#nextEnigma');

    //Variables de configuración
    var cont_left = parseInt(container.css('left'));
    var cont_width = parseInt(container.width());
    var cont_height = parseInt(container.height());
    var barco_width = parseInt(colsq.width());
    var barco_height = parseInt(colsq.height());

    //Variables controlador juego
    var game_over = false;

    var score_counter = 1;

    var speed = 2;

    var moveR = false;
    var moveL = false;
    var moveU = false;
    var moveD = false;

/**/

//Animaciones de movimiento
function left(){
    if(game_over == false && parseInt(player.css('left')) > 0){
        player.css('left', parseInt(player.css('left')) - 5);
        moveL = requestAnimationFrame(left);
    }
}

function right(){
    if(game_over == false && parseInt(player.css('left')) < cont_width - barco_width){
        player.css('left', parseInt(player.css('left')) + 5);
        moveR = requestAnimationFrame(right);
    }
}

function up(){
    if(game_over == false && parseInt(player.css('top')) > 0){
        player.css('top', parseInt(player.css('top')) - 5);
        moveU = requestAnimationFrame(up);
    }
}

function down(){
    if(game_over == false && parseInt(player.css('top')) < cont_height - barco_height){
        player.css('top', parseInt(player.css('top')) + 5);
        moveD = requestAnimationFrame(down);
    }
}

//Al apretar alguna de las flechas del teclado
$(document).on('keydown', function(e){
    if(game_over == false){
        var key = e.keyCode;
        if(key == 37 && moveL == false){
            moveL = requestAnimationFrame(left);
        } else if(key == 39 && moveR == false){
            moveR = requestAnimationFrame(right);
        } else if(key == 38 && moveU == false){
            moveU = requestAnimationFrame(up);
        } else if(key == 40 && moveD == false){
            moveD = requestAnimationFrame(down);
        }
    }
});

//Al soltar alguna de las flechas del teclado
$(document).on('keyup', function(e){
    if(game_over == false){
        var key = e.keyCode;
        if(key == 37){
            cancelAnimationFrame(moveL);
            moveL = false;
        } else if(key == 39){
            cancelAnimationFrame(moveR);
            moveR = false;
        } else if(key == 38){
            cancelAnimationFrame(moveU);
            moveU = false;
        } else if(key == 40){
            cancelAnimationFrame(moveD);
            moveD = false;
        }
    }
});

//Funciones en bucle

anim_id = requestAnimationFrame(repeat);

function spawnEnemy(enemy){
    var current_top = parseInt(enemy.css('top'));
    if(current_top > cont_height){
        current_top = -100;
        var enemy_left = parseInt(Math.random() * (cont_width - barco_width));
        enemy.css('left', enemy_left);
    }
    enemy.css('top', current_top + speed);
}

function endGame($passed){
    game_over = true;
    cancelAnimationFrame(anim_id);
    cancelAnimationFrame(moveL);
    cancelAnimationFrame(moveR);
    cancelAnimationFrame(moveU);
    cancelAnimationFrame(moveD);

    if($passed){
        ndiv.slideDown();
        nbutton.focus();
    } else {
        rdiv.slideDown();
        rbutton.focus();
    }
}

nbutton.click(function(){
    //Actualizar cookie
});

rbutton.click(function(){
    location.reload();
});

function repeat(){
    if(game_over == false){

        if(collision(player, enemy1) || collision(player, enemy2) || collision(player, enemy3)){
            endGame(false);
        }
        
        if(parseInt(score.text()) == 50){
            endGame(true);
        }

        score_counter++;

        if(score_counter % 20 == 0){
            score.text(parseInt(score.text()) + 1);
        }

        if(score_counter % 200 == 0) {
            speed++;
        }

        spawnEnemy(enemy1);
        spawnEnemy(enemy2);
        spawnEnemy(enemy3);

        anim_id = requestAnimationFrame(repeat); 
    }
}

/**/

    function collision($div1, $div2) {
        var x1 = $div1.offset().left + colsq.offset().left;
        var y1 = $div1.offset().top + colsq.offset().top;
        var h1 = colsq.outerHeight(true);
        var w1 = colsq.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;

        var x2 = $div2.offset().left + colsq.offset().left;
        var y2 = $div2.offset().top + colsq.offset().top;
        var h2 = colsq.outerHeight(true);
        var w2 = colsq.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;

        if(b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2){
            return false;
        } else {
            return true;
        }
    }
})