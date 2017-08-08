function findLergest3Nums(numbers) {
    console.log(numbers.sort(function(a, b){return b-a}).slice(0, 3).join('\n'));
}

findLergest3Nums([10, 30, 15, 20, 50, 5]);