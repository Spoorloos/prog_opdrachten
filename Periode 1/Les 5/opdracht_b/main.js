// Modules.
const { writeFileSync } = require("fs");
const config = require("./options/config.json");
let settings = require("./options/settings.json");

// Client setup.
const { Client, GatewayIntentBits, Events } = require("discord.js");
const client = new Client({
	intents: [
        GatewayIntentBits.Guilds,
        GatewayIntentBits.GuildMessages,
        GatewayIntentBits.MessageContent
    ]
});

// Functions.
async function idToUser(userId) {
    return await client.users.fetch(userId);
}

function isWhitelisted(userId) {
    return settings.whitelist.find(value => value === userId);
}

function updateSettings() {
    writeFileSync("./options/settings.json", JSON.stringify(settings, null, 4));
}

// Events
client.on(Events.MessageCreate, async message => {
    // Check if the message was send by our bot.
    if (message.author === client.user) return;

    // Check if the message is a command.
    if (message.content[0] === '!' && isWhitelisted(message.author.id)) {
        // Get the command and arguments from the message.
        const [ command, ...arguments ] = message.content.toLowerCase().split(' ');

        switch (command) {
            // Toggle reactions command.
            case "!togglereactions":
                // Toggle the state and update the settings file.
                settings.enabled = !settings.enabled;
                updateSettings();
    
                // Tell the user the current state.
                message.reply(`Reactions staan nu ${settings.enabled ? "aan" : "uit"}.`);
                break;

            // Whitelist command.
            case "!whitelist":
                switch (arguments[0]) {
                    // Whitelist add command.
                    case "add":
                    {
                        // Check if the user id isn't whitelisted yet.
                        const user = await idToUser(arguments[1]);
                        if (!isWhitelisted(user.id)) {
                            // Add the user to the whitelist and update the settings file.
                            settings.whitelist.push(user.id);
                            updateSettings();

                            // Tell them the user has been whitelisted.
                            message.reply(`\`${user.username}\` is toegevoegd aan de whitelist.`);
                        } else {
                            // Tell them the user is already whitelisted.
                            message.reply(`\`${user.username}\` staat al op de whitelist.`);
                        }

                        break;
                    }

                    // Whitelist remove command.
                    case "remove":
                    {
                        // Check if the user id is whitelisted.
                        const user = await idToUser(arguments[1]);
                        if (isWhitelisted(user.id)) {
                            // Remove the user from the whitelist and update the settings file.
                            settings.whitelist.splice(settings.whitelist.findIndex(value => value === user.id), 1);
                            updateSettings();

                            // Tell them the user has been removed from the whitelist.
                            message.reply(`\`${user.username}\` is verwijderd van de whitelist.`);
                        } else {
                            // Tell them the user is not on whitelisted.
                            message.reply(`\`${user.username}\` staat niet op de whitelist.`);
                        }
                        break;
                    }

                    // Whitelist list command.
                    case "list":
                        let list = "**Whitelist:**\n";
                        for (let userId of settings.whitelist) {
                            list += `- \`${(await idToUser(userId)).username}\` (${userId})\n`;
                        }
                        message.reply(list);
                        break;
                }
                break;
        }
    } else if (settings.enabled) {
        // React to the message with a random emoji.
        const emoji = message.guild.emojis.cache.random();
        if (emoji) {
            message.react(emoji.id);
        }
    }
});

client.once(Events.ClientReady, client => {
    console.log("Logged in as:", client.user.username);
});

// Client login.
client.login(config.token);