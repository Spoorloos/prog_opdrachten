const { keyIn, question } = require('readline-sync');

let list = [];

while (true) {
    console.clear();

    if (list.length > 0)
        console.log(`Jouw lijst bevat: ${ list.join(', ') }`);
    else
        console.log('Jouw lijst is leeg.');

    switch (keyIn('\nWat wil je doen? toevoegen(t) of verwijderen(v)\n> ', { limit: [ 't', 'v' ] })) {
        case 't':
            list.push(question('\nWat wil je toevoegen?\n> '));
            break;
        case 'v':
            let item = question('\nWat wil je verwijderen?\n> ').toLowerCase();
            let index = list.findIndex(value => value.toLowerCase() === item);
            list.splice(index, 1);
            break;
    }
}