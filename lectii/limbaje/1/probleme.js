// cand punem tag-ul <script> in <head> si cand in <body>?

var counter = 12; counter++; console.log(Counter);

var return = 3 + '5'; console.log(return);

var a, b = 3; console.log(a, b, c);

var name = 'alex'; var name; console.log(name);

var x = '2' + 2 + 2; console.log(x);

var x = 2 + '2' + 2; console.log(x);

var x = 2 + 2 + '2'; console.log(x);

var x = 2 + Number('2'); console.log(x);

var x = 123; console.log(x.indexOf(2));

var x = '3'; y = +x * 2; console.log(y);

var x = 6; x /= 2; console.log(x);

console.log(3 + null);

console.log('3' + null);

console.log('7' - 2);

console.log('7' * '3');

var x = 3; x = 'alex'; console.log(typeof x);

var x = false; console.log(x = true ? 'da' : 'nu');

var x = 0; if (x = 0) console.log('da'); else console.log('nu');

var x = '10';
switch (x) {
	case 10: console.log(10); break;
	default: console.log(null); break;
}

var x = 66;
{
	x++;
	console.log(x);
}

var person = [];
person["firstName"] = "John";
console.log(person.length);
console.log(person[0]);
console.log(person.firstName);

console.log(Boolean(-15));
console.log(Boolean('false'));
console.log(Boolean(''));
console.log(Boolean(3 + 4 - 2));
console.log(Boolean(0));
console.log(Boolean(null));
console.log(Boolean(10 / 'A'));
console.log(Boolean(4 % 3));
console.log(Boolean(4 < '14'));
console.log(Boolean('4' < '14'));
console.log(Boolean({a: 2} == {a: 2}));
console.log('' == false);
console.log(0 === false);
console.log(Boolean('0'));
console.log(Boolean(Number(false)));
console.log(Boolean(new Date));

// in cod JS ce rol are expresia "use strict";