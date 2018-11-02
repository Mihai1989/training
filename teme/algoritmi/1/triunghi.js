const {prompt} = require('../../../modules/prompt');

console.log('triunghi(a, b, c)');

prompt([
	'a = ',
	'b = ',
	'c = ',
]).then(run);

function run(answers) {
	let [a, b, c] = answers.map(Number);
	let r = triunghi(a, b, c);
	console.log(r ? 'adevarat' : 'fals');
}

function triunghi(a, b, c) {
	return a < b + c && b < a + c && c < a + b;
}
