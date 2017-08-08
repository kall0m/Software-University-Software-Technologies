function FindSymmetricNums(str) {
    let num = Number(str);

    for (let i = 1; i <= num; i++) {
        let sNumber = i.toString();
        let reversedSNumber = sNumber.split('').reverse().join('');

        if (sNumber === reversedSNumber) {
            console.log(sNumber);
        }
    }
}

FindSymmetricNums(['1000']);