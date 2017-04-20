var router = require('express').Router();
var authentication = require('../utils/authentication');

router.get('/login', (req, res) => {
  res.render('login.pug');
});

router.post('/login', (req, res) => {

});

module.exports = router;
