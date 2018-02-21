$(() => {
    $("form").submit(function(event){
      event.preventDefault();
      var zip = $(":input" ).serializeArray();

      //console.log( $("form").serializeArray() );
      $( "#results" ).empty();
      jQuery.each( zip  , function( i, field ) {
          $( "#results" ).append( zip[0].value + " " );

      //$.getJSON("api.openweathermap.org/data/2.5/weather?zip={" + zip[0].value + "},{us}&APPID={e683b50e91c6b7372e75995b3058f380}", function(){ console.log("Sent Data");});
      $.getJSON("http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID={05cecf912641e99ee3eb3c056de867ab}", function(){ console.log("Sent Data");});
    });
    });


});

function validateForm(){
    var x = document .forms["myForm"]["Zipcode"].value;
    x = parseInt(x);
    if(x==""){
      alert("Need a valid zip");
      return false;
    }
    if(x.length>5){
      alert("Need a valid zip");
      return false;
    }
    if(x.length<5){
      alert("Need a valid zip");
      return false;
    }
}
