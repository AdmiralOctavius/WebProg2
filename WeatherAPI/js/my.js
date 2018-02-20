$(() => {
    $("form").submit(function(event){
      event.preventDefault();
      var zip = $(":input" ).serializeArray();

      //console.log( $("form").serializeArray() );
      $( "#results" ).empty();
      jQuery.each( zip  , function( i, field ) {
          $( "#results" ).append( zip[0].value + " " );
    });
    });


});

function validateForm(){
    var x = document .forms["myForm"]["Zipcode"].value;
    if(x==""){
      alert("Need a valid zip");
      return false;
    }
    if(x>5){
      alert("Need a valid zip");
      return false;
    }
    if(x<5){
      alert("Need a valid zip");
      return false;
    }
}
