var donneesrestaureception=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/restaureceptions",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donneesrestaureception = data;
          console.log(donneesrestaureception);
        },
    
        error:function () {
          alert('erreur');
          console.log('erreur');
        }
    });

     // test();
});

/*function test() {
    let d = 0
    alert("ok noxus "+donnees[d].prix);
}*/

function getDonneesRestau() {
  return donneesrestaureception;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/