function parseToJSONObjects(input) {
    for (let i = 0; i < input.length; i++) {
        let person = JSON.parse(input[i]);

        console.log("Name: " + person.name);
        console.log("Age: " + person.age);
        console.log("Date: " + person.date);
    }
}

parseToJSONObjects(['{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","age":11,"date":"04/04/2005"}']);