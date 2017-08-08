function printValueOfKey(input) {
    let obj = {};

    for (let i = 0; i < input.length - 1; i++) {
        let pair = input[i].split(' ');

        obj[pair[0]] = pair[1];
    }

    let key = input[input.length - 1];

    if (key in obj) {
        console.log(obj[key]);
    }
    else {
        console.log("None");
    }
}

printValueOfKey(['3 test',
    '3 test1',
    '4 test2',
    '4 test3',
    '4 test5',
    '4']);