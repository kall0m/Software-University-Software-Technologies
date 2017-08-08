function printObjects(input) {
    let students = [];

    for (let i = 0; i < input.length; i++) {
        let data = input[i].split(' -> ').filter(d => d != '');

        let name = data[0];
        let age = Number(data[1]);
        let grade = parseFloat(data[2]).toPrecision(3);

        let student = {};

        student.Name = name;
        student.Age = age;
        student.Grade = grade;

        students.push(student);
    }

    for (let student of students) {
        console.log("Name: " + student.Name);
        console.log("Age: " + student.Age);
        console.log("Grade: " + student.Grade);
    }
}

printObjects(['Pesho -> 13 -> 6.00',
    'Ivan -> 12 -> 5.57',
    'Toni -> 13 -> 4.90']);