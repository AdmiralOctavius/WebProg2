$(() => {

    var turn1 = false;
    var grid = [0,0,0,
                0,0,0,
                0,0,0];

    $(".box").click( function(){
        if(turn1==false && !($(this).hasClass("O") || $(this).hasClass("X") )){
          $(this).addClass("O");
          $(this).append("<img class='ticTacToeImage' src='images/O.png'>");
          turn1=true;
          grid[0] = 1;
        }
        else if(turn1==true && !($(this).hasClass("O") || $(this).hasClass("X") )){
          $(this).addClass("X");
          $(this).append("<img class='ticTacToeImage' src='images/X.png'>");
          turn1=false;
          grid[0] = 2;
        }
    });


});
