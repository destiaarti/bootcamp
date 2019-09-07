function is_password_valid(password) {
  // huruf keci a sampai z
	var lowercaseRe = /[a-z]/g;
  
  // huruf besar A sampai Z
  var uppercaseRe = /[A-Z]/g;

  // angka dari 0 sampai 9
  var numberRe = /[0-9]/g;

  // karater unik _@#$ atau %
  var specialRe = /[_@#$%]/g;

  if(password.length >= 8
     && lowercaseRe.test(password)
     && uppercaseRe.test(password)
     && numberRe.test(password)
     && specialRe.test(password)) {
     return true;
  }

  return false;
}
// contoh penggunaan


console.log(is_password_valid('123Qwer_') ? 'true' : 'false'); //true
console.log(is_password_valid('123qwer_') ? 'true' : 'false'); //false
console.log(is_password_valid('ssdga_A7') ? 'true' : 'false'); //benar
console.log(is_password_valid('SUper&&_4') ? 'true' : 'false'); //benar