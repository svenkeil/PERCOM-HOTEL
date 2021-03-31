var donneeschambre=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/chambresoccupees",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donneeschambre = data;
          console.log(donneeschambre);
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

function getDonneesChambre() {
  return donneeschambre;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/