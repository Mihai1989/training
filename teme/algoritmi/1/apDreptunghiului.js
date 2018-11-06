const {prompt} = require('../../../modules/prompt');

console.log('apDreptunghiului(a, b)');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let [a, b] = answers.map(Number);
	let r = apDreptunghiului(a, b);
	console.log('apDreptunghiului ' + r);
}

function apDreptunghiului(a, b) {
	//aDreptunghiului = lungimea * latimea;
	let aDreptunghiului = a * b;
	//pDreptunghiului = 2(lungimea * latimea);
	let pDreptunghiului = 2 * (a * b);
	return [aDreptunghiului, pDreptunghiului];
}
