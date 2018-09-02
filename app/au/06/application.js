function checkCpf(cpf) {
  var sum;
  var r;
  sum = 0;
  if (cpf == "00000000000") return false;

  for (i=1; i<=9; i++) sum = sum + parseInt(cpf.substring(i-1, i)) * (11 - i);
  r = (sum * 10) % 11;

  if ((r == 10) || (r == 11))  r = 0;
  if (r != parseInt(cpf.substring(9, 10)) ) return false;

  sum = 0;
  for (i = 1; i <= 10; i++) sum = sum + parseInt(cpf.substring(i-1, i)) * (12 - i);
  r = (sum * 10) % 11;

  if ((r == 10) || (r == 11))  r = 0;
  if (r != parseInt(cpf.substring(10, 11) ) ) return false;
  return true;
}

function checkEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function checkDate(date)
{
    // First check for the pattern
    if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(date))
        return false;

    // Parse the date parts to integers
    var parts = date.split("/");
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
};

$('#a [type=button]').on('click', function() {
  var cpf = $('#a [name=cpf]').val()
  var email = $('#a [name=email]').val()
  var date = $('#a [name=date]').val()

  if (checkCpf(cpf)) {
    alert('CPF Válido')
  }

  if (checkEmail(email)) {
    alert('EMAIL Válido')
  }

  if (checkDate(date)) {
    alert('DATE Válido')
  }
})

function createLi(str) {
  var li = document.createElement('li')
  li.appendChild(document.createTextNode(String(str)))
  return li
}

function fatorial(n) {
  if (n <= 0){
    return 1
  }
  return fatorial(n - 1) * n;
}

var fatorialList = $('#collapseFatorial .js-list').first()
var squareList = $('#collapseSquare .js-list').first()
var cubeList = $('#collapseCube .js-list').first()

var values = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

values.map(function(n){
  fatorialList[0].appendChild(createLi(n+" : "+fatorial(n)))
  squareList[0].appendChild(createLi(n+" : "+n*n))
  cubeList[0].appendChild(createLi(n+" : "+n*n*n))

  return n
})

function createHN(hn){
  var div = document.createElement('div')
  div.className = 'row'
  var he = document.createElement(hn)
  he.appendChild(document.createTextNode('Lorem ipsum dolor'))
  div.appendChild(he)
  return div
}

var hList = $('#c').first()
var hs = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'h7']

hs.map(function(h){
  hList[0].appendChild(createHN(h))
  return h
})
