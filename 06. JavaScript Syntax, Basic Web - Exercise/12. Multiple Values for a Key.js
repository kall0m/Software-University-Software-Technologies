function printAllValuesOfKey(input) {
    let obj = {};

    for (let i = 0; i < input.length - 1; i++) {
        let pair = input[i].split(' ');

        if (!(pair[0] in obj)) {
            obj[pair[0]] = [];
        }
        obj[pair[0]].push(pair[1]);
    }

    let key = input[input.length - 1];

    if (key in obj) {
        let values = obj[key];
        for (value of values) {
            console.log(value);
        }
    }
    else {
        console.log("None");
    }
}

printAllValuesOfKey(['key value',
    'key eulav',
    'test tset',
    'key']);