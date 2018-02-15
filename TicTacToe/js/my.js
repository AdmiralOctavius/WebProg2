function isWinner(grid)

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
          grid[$(".box").index(this)] = 1;
          $('#display').text(grid[$(".box").index(this)]);
            if(grid[0] == grid[1] && grid[1] == grid[2] && grid[0] == grid[2]){
              $('#display').text("Equals!");
            }
        }
        else if(turn1==true && !($(this).hasClass("O") || $(this).hasClass("X") )){
          $(this).addClass("X");
          $(this).append("<img class='ticTacToeImage' src='images/X.png'>");
          turn1=false;
          grid[$(".box").index(this)] = 2;
          $('#display').text(grid[$(".box").index(this)]);
        }


    });


});
