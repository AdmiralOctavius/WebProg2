$(() => {

    var turn1 = false;
    var grid = [0,0,0,
                0,0,0,
                0,0,0];

    $("#grid1").click( function(){
        if(turn1==false){
          $("#grid1").addClass("O");
          turn1=true;
          grid[0] = 1;
        }
        else{
          $("#grid1").addClass("X");
          turn1=false;
          grid[0] = 2;
        }
    )};


});
