var router = require('express').Router();
var auth = require('./authentication.js');

//var authentication = require('./authentication');

//router.use(authentication);
//router.use(require('./login'));

router.get('/login', (req, res) => {
  res.status(200).send('Hello, World!');
});

router.get('*', (req, res) => {
  res.send('catch all');
});

module.exports = router;
