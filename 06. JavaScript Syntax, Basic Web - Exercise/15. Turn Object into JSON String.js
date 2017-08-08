function turnObjectIntoJSONString(input) {
    let person = {};

    person.name = input[0].split(' -> ').filter(n => n != '')[1];
    person.surname = input[1].split(' -> ').filter(s => s != '')[1];
    person.age = Number(input[2].split(' -> ').filter(a => a != '')[1]);
    person.grade = parseFloat(input[3].split(' -> ').filter(g => g != '')[1]);
    person.date = input[4].split(' -> ').filter(d => d != '')[1];
    person.town = input[5].split(' -> ').filter(t => t != '')[1];

    console.log(JSON.stringify(person));
}

turnObjectIntoJSONString(['name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia']);