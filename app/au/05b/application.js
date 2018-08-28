$('#a [name=original]').on('keyup', function() {
  if($('#a [name=enable]').is(':checked')) {
    var value = $('#a [name=original]').val()
    var lower = value.toLowerCase()
    var upper = value.toUpperCase()

    $('#a [name=uppercase]').val(upper)
    $('#a [name=downcase]').val(lower)
  }
})

$('#b [type=button]').on('click', function() {
  var email = $('#b [name=email]').val()
  var raw_passwrd = $('#b [name=password]').val()
  var con_passwrd = $('#b [name=confirm_password]').val()

  if(raw_passwrd === con_passwrd) {
    alert(email + " cadastrado com sucesso!")
  } else {
    alert("A confirmação da senha não é igual a senha digitada!")
  }
})

$('#c [name=name]').on('focusout', function() {
  var nome = $('#c [name=name]').val();

  var dia = "Bom dia, " + nome
  var tarde = "Boa tarde, " + nome
  var noite = "Boa noite, " + nome

  var hour = parseInt(moment().format('H'))

  var saudacao = {
    0: noite,
    1: noite,
    2: noite,
    3: noite,
    4: noite,
    5: noite,
    6: noite,
    7: dia,
    8: dia,
    9: dia,
    10: dia,
    11: dia,
    12: dia,
    13: tarde,
    14: tarde,
    15: tarde,
    16: tarde,
    17: tarde,
    18: noite,
    19: noite,
    20: noite,
    21: noite,
    22: noite,
    23: noite,
    24: noite
  }[hour]

  var final = saudacao + "! Hoje é " + moment().format('LLLL')

  alert(final)
})

function harold(standIn) {
  if (standIn < 10) {
    standIn = '0' + standIn
  }
  return standIn;
}

function clock() {
  var time = new Date(),
  hours = time.getHours(),
  minutes = time.getMinutes(),
  seconds = time.getSeconds();
  var time_text = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
  $('.clock').html(time_text)
}

clock()
setInterval(clock, 1000);
