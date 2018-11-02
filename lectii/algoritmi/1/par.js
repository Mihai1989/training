const {prompt} = require('../../../modules/prompt');

console.log('sa se determine daca n este par');

prompt([
	'n = ',
]).then(run);

function run(answers) {
	let [n] = answers;
	let r = par(n);
	console.log(r ? 'adevarat' : 'fals');
}

function par(n) {
	return !(n % 2);
}