var donneesclients=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/clients",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donneesclients = data;
          console.log(donneesclients);
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

function getDonneesClients() {
  return donneesclients;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/