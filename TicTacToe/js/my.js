function isWinner(){
  //Horizontal
  if(grid[0] == grid[1] && grid[1] == grid[2] && grid[0] == grid[2]){
    if(grid[0] == 1){
        $('#display').text("Player 1 Wins!");
        wlt[0] = wlt[0]++;
        endGame = true;
    }
    else if(grid[0] == 2){
        $('#display').text("Player 2 Wins!");
        wlt[1] = wlt[1]++;
        endGame = true;
    }
  }
  if(grid[3] == grid[4] && grid[4] == grid[5] && grid[3] == grid[5]){
    if(grid[3] == 1){
        $('#display').text("Player 1 Wins!");
        wlt[0] = wlt[0]++;
        endGame = true;
    }
    else if(grid[3] == 2){
        $('#display').text("Player 2 Wins!");
        wlt[1] = wlt[1]++;
        endGame = true;
    }
  }
  if(grid[6] == grid[7] && grid[7] == grid[8] && grid[6] == grid[8]){
    if(grid[6] == 1){
        $('#display').text("Player 1 Wins!");
        wlt[0] = wlt[0]++;
        endGame = true;
    }
    else if(grid[6] == 2){
        $('#display').text("Player 2 Wins!");
        wlt[1] = wlt[1]++;
        endGame = true;
    }
  }

  //Diagonals
  if(grid[0] == grid[4] && grid[4] == grid[8] && grid[0] == grid[8]){
    if(grid[0] == 1){
        $('#display').text("Player 1 Wins!");
        wlt[0] = wlt[0]++;
        endGame = true;
    }
    else if(grid[0] == 2){
        $('#display').text("Player 2 Wins!");
        wlt[1] = wlt[1]++;
        endGame = true;
    }
  }
  if(grid[2] == grid[4] && grid[4] == grid[8] && grid[2] == grid[8]){
    if(grid[2] == 1){
        $('#display').text("Player 1 Wins!");
        wlt[0] = wlt[0]++;
        endGame = true;
    }
    else if(grid[2] == 2){
        $('#display').text("Player 2 Wins!");
        wlt[1] = wlt[1]++;
        endGame = true;
    }
  }

  //Tie function
  var emptyCount = 0;
  for(i =0; i<9;i++){
    if(grid[i] == 0){
      console.log(i + "Still empty");
      emptyCount++;
    }
  }
  if(emptyCount == 0){
    tie = true;
    endGame = true;
    wlt[2] = wlt[2]++;
    $('#display').text("It's a Tie!");
  }

}
//Global Variables
var turn1 = false;
var grid = [0,0,0,
            0,0,0,
            0,0,0];
var tie = false;
var wlt = [0,0,0];
var endGame = false;
$(() => {


    $("#reset").click( function(){
        grid = [0,0,0,
                0,0,0,
                0,0,0];
        turn1 = false;
        tie = false;
        endGame = false;
        $(".box").removeClass("O");
        $(".box").removeClass("X");
        $(".ticTacToeImage").remove();
        $('#display').text("Begin Play!");
    });



    $(".box").click( function(){
      if(endGame == false){
        if(turn1==false && !($(this).hasClass("O") || $(this).hasClass("X") )){
          $(this).addClass("O");
          $(this).append("<img class='ticTacToeImage' src='images/O.png'>");
          turn1=true;
          grid[$(".box").index(this)] = 1;
          $('#display').text("Player 2's Turn!");
          isWinner()

        }
        else if(turn1==true && !($(this).hasClass("O") || $(this).hasClass("X") )){
          $(this).addClass("X");
          $(this).append("<img class='ticTacToeImage' src='images/X.png'>");
          turn1=false;
          grid[$(".box").index(this)] = 2;
          $('#display').text("Player 1's Turn!");
          isWinner();
        }
      }
      else{
        $('#display').text("It's over silly!");
      }
    });


});
