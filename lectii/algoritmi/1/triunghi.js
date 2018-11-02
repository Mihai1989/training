const {prompt} = require('../../../modules/prompt');

console.log('verifica daca (a, b, c) pot fi laturile unui triunghi');

prompt([
	'a = ',
	'b = ',
	'c = ',
]).then(run);

function run(answers) {
	let [a, b, c] = answers.map(Number);
	let r = triangle(a, b, c);
	console.log(`(${a}, ${b}, ${c}) =>`, r ? 'adevarat' : 'fals');
}

function triangle(a, b, c) {
	return a < b + c && b < a + c && c < a + b;
}