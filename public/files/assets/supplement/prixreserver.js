var donnees=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/chambreslibres",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          donnees = data;
          console.log(donnees);
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

function getDonnees() {
  return donnees;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/