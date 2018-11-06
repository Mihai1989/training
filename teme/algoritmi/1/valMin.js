const {prompt} = require('../../../modules/prompt');

console.log('valMin(a, b, c)');

prompt([
	'a = ',
	'b = ',
	'c = ',
]).then(run);

function run(answers) {
	let [a, b, c] = answers.map(Number);
	let r = valMin(a, b, c);
	console.log('The min val is ' + r);
}

function valMin(a, b, c) {
	if (a < b && a < c) {
		return a;
	}
	if (b < a && b < c) {
		return b;
	}
	if (c < a && c < b) {
		return c;
	}
}
