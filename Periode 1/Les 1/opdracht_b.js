const players = [
    {
        name: "Player 1",
        level: 50.5,
        health: 100,
        wanted: false,
    },
    {
        name: "Player 2",
        level: 23.7,
        health: 76,
        wanted: true,
    },
    {
        name: "Player 3",
        level: 105.3,
        health: 100,
        wanted: false,
    }
]

players.forEach(player => {
    console.log(
        `Name: ${ player.name }\n`,
        `Level: ${ player.level }\n`,
        `Health: ${ player.health }\n`,
        `Wanted: ${ player.wanted }\n`
    );
});