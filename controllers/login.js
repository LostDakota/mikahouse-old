var router = require('express').Router();
var authentication = require('../utils/authentication');

router.get('/login', (req, res) => {
  res.render('login.pug');
});

router.post('/login', (req, res) => {
  var username = req.body.username;
  var password = req.body.password;
  var ip = req.header('x-forwarded-for') || req.connection.remoteAddress;
  var gatekeeper = authentication.authenticateUser(username, password, ip);
  if(gatekeeper !== ''){
    console.log(gatekeeper);
    res.send('still poop');
  }else{
    res.send('poop');
  }
});

module.exports = router;
