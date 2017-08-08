function setValuesToIndexes(numbers) {
    let arrLen = Number(numbers[0]);
    let indices = [];
    let numsArr = [];

    for (let i = 1; i < numbers.length; i++) {
        let indexValue = numbers[i];
        indices.push(Number(indexValue.split(' - ').filter(n => n != '')[0]));
        numsArr.push(Number(indexValue.split(' - ').filter(n => n != '')[1]));
    }

    let resultArr = [];

    for (let i = 0; i < arrLen; i++) {
        resultArr[i] = 0;
    }

    for (let i = 0; i < indices.length; i++) {
        resultArr[indices[i]] = numsArr[i];
    }

    console.log(resultArr.join('\n'));
}
setValuesToIndexes(['5', '0 - 3', '3 - -1', '4 - 2']);