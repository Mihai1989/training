const readline = require('readline');
let interface;

const question = (text) => {
	return new Promise(resolve => {
		interface.question(text, (answer) => {
			resolve(answer);
		});
	});
};

const questions = function(items) {
	return new Promise(async resolve => {
		interface = readline.createInterface({
			input: process.stdin,
			output: process.stdout,
		});
		let answers = [];
		for (let i = 0; i < items.length; i++) {
			const answer = await question(items[i]);
			answers.push(answer);
		}
		interface.close();
		resolve(answers);
	});
};

module.exports = {
	prompt: questions,
}