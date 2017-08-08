function makeArr(commands) {
    let resultArr = [];

    for (let i = 0; i < commands.length; i++) {
        let pair = commands[i].split(' ');
        let command = pair[0];
        let number = Number(pair[1]);

        if (command === "add") {
            resultArr.push(number);
        }
        else if (command === "remove") {
            if (number >= 0 && number < resultArr.length) {
                resultArr.splice(number, 1);
            }
        }
    }

    console.log(resultArr.join('\n'));
}

makeArr(['add 3',
    'add 5',
    'add 7',
    'remove 1']);