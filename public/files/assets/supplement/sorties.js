var donneesreception=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/receptions",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donneesreception = data;
          console.log(donneesreception);
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

function getDonneesRecep() {
  return donneesreception;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/