const {prompt} = require('../../../modules/prompt');

console.log('interschimbare(a, b)');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	var c;
	let [a, b] = answers.map(Number);
	c = a;
	a = b;
	b = c;
	console.log(a, b);
}
