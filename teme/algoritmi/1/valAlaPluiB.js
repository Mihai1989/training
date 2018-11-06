const {prompt} = require('../../../modules/prompt');

console.log('valAlaPluiB(a, b)');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let [a, b] = answers.map(Number);
	let r = valAlaPluiB(a, b);
	console.log('valAlaPluiB ' + r);
}

function valAlaPluiB(a, b) {
	let c = a * b;
	return c;
}
