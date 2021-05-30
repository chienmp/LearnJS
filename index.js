const express = require('express');
var fetch = require('node-fetch');  
const app = express();
/* function handleIndexRequest(req, res) {
    const name = req.query.name || 'Stranger';    
    res.render('home' ,{ name: name });
}; */
app.get('/', (req, res) => {
    const code = req.query.code;

    fetch('https://api.nexchange.io/en/api/v1/currency/')
        .then(cryptoData => cryptoData.json())
        .then(cryptoData => {
            return code ? cryptoData.filter(crypto => crypto.code == code) : cryptoData
        })
        .then(cryptoData => {
            res.render('home', {cryptoData: cryptoData});
        })
        .catch(err => console.log(err))
});
app.set('view engine', 'ejs');
app.listen(3000, () => {
    console.log('Example app listening on port 3000!');
});