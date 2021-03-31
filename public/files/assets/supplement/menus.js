var menus=[];

$(document).ready(function() {
    // alert('bien joue');
    $.ajax({
        type: "GET",
    
        dataType: "json",
    
        url: "http://localhost:8000/api/restaurations",
    
        success:function (data) {
          // alert('get success');
          console.log('succes');
          menus = data;
          console.log(menus);
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

function getMenus() {
  return menus;
}

/*
$('.affich').on('click', function() {
    
    test();
    
});*/