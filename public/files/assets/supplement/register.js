$('#name_error_message').hide();
$('#phone_error_message').hide();
$('#email_error_message').hide();
$('#password_error_message').hide();

var error_phone = true;
var error_email = true;
var error_password = true;

var  date_naiss;
var  date_naiss1;

$('#email').focusout(function() {
    
    check_email();
    alert('gg');
});

$('#tel').focusout(function() {
    
    check_phone();
});

$('#password').focusout(function() {
    
    check_password();
});


function check_email() {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

    if (pattern.test($('#email').val())) {
        $('#email_error_message').hide();
        error_email = false;
    } else {
        $('#email_error_message').html('Adresse email invalide');
        $('#email_error_message').show();
        error_email = true;
    }
}

function check_phone() {
   
}

function check_password() { 
    var pattern2 = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}$/i);
    var pattern3 = /^[a-zA-Z0-9._].{8}$/i;
    var pattern4 = new RegExp(/^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&-_?"]).*$/);
    if (pattern4.test($('#password').val())) {
        $('#password_error_message').hide();
        error_password = false;
    } else {
        $('#password_error_message').html('Mot de passe invalide.Au moins une lettre majuscule et un chiffre');
        $('#password_error_message').show();
        error_password = true;
    }
}

// verification age

function getAge(la_date) {
    return Math.floor( (new Date).getTime()-la_date.getTime()) / (365.24*24*3600*1000); //difference en seconde  diviser par le nombre de secondes dans une annee
  }
  
  /*$('#field_duree').hide();
  $('#field_autre').hide();*/
  
  $('#dob').change(function() {
    date_naiss = new Date($('#dob').val());
  
  
    var  new_date = new Date(date_naiss.getFullYear(), date_naiss.getMonth(), date_naiss.getDate());
    date_naiss1 = parseInt(getAge(new_date));
  
  });
  



