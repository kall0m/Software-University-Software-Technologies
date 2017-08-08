function printIncomesForTown(arr) {
    let objects = arr.map(JSON.parse);
    let sums = {};

    for(let obj of objects){
        if(!(obj.town in sums)){
            sums[obj.town] = 0;
        }
        sums[obj.town] += obj.income;
    }

    for(let town of Object.keys(sums).sort()){
        console.log(`${town} -> ${sums[town]}`)
    }
}

printIncomesForTown(['{"town":"Sofia","income":200}',
    '{"town":"Varna","income":120}',
    '{"town":"Pleven","income":60}',
    '{"town":"Varna","income":70}']);