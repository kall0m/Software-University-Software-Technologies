function checkProductOf3Nums(nums) {
    let arr = nums.map(Number);

    let negativeCount = 0;

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] < 0) {
            negativeCount++;
        }
    }

    if (negativeCount % 2 == 0) {
        console.log("Positive");
    }
    else {
        console.log("Negative");
    }
}