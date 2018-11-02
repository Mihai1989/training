const {prompt} = require('../../../modules/prompt');

console.log('procent(n, p)');

prompt([
	'n = ',
	'p = ',
]).then(run);

function run(answers) {
	let [n, p] = answers.map(Number);
	let r = procent(n, p);
	console.log(r);
}

function procent(n, p) {
	let procent = n * p / 100;
	let result = n + procent;
	return result;
}
