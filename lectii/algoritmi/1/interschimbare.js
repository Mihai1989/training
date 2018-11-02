const {prompt} = require('../../../modules/prompt');

console.log('interschimba valorile a si b');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let aux, [a, b] = answers.map(Number);
	aux = a;
	a = b;
	b = aux;
	//[a, b] = [b, a];
	console.log(`a = ${a}, b = ${b}`);
}