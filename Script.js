var uzytkownik = 'bartoszosiej';
var domena = 'o2.pl';
var dodatkowe = '?subject=Temat listu&body=Napisz co%9C:%0A';
var opis = 'Wyślij do mnie wiadomość';
document.write('<a hr' + 'ef="mai' + 'lto:' + uzytkownik + '\x40' + domena + dodatkowe + '">');
if (opis) document.write(opis + '<'+'/a>');
else document.write(uzytkownik + '\x40' + domena + '<'+'/a>');
