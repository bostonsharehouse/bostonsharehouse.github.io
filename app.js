const express = require('express');
const app = express();

const Console = console;

app.use(express.static('public'))

app.listen(80, _  => Console.log('FUCK YEAH LET\'S GO'))
