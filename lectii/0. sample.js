const {prompt} = require('../modules/prompt');

console.log('se cere ...');

prompt([
	'a = ',
]).then(run);

function run(answers) {
	let [a] = answers;

	console.log(`rezultat`);
}