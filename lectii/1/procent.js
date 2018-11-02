const {prompt} = require('../../modules/prompt');

console.log('calculeaza (n + p%)');

prompt([
	'n = ',
	'p = ',
]).then(run);

function run(answers) {
	let [n, p] = answers.map(Number);
	let r = calc(n, p);
	console.log(`(${n} + ${p}%) =`, r);
}

function calc(n, p) {
	p /= 100;
	return n + p * n;
}