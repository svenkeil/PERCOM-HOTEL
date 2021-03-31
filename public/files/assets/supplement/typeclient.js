var donneestype=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/typeclients",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donneestype = data;
          console.log(donneestype);
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

function getDonneesType() {
  return donneestype;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/