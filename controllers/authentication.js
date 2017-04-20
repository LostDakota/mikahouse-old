var router = require('express').Router();
var authentication = require('../utils/authentication');

router.get('*', (req, res, next) => {
  if(req.url == '/login'){
    next();
  }else{
    if(req.cookies){
      if(authentication.checkPermissions(req.cookies.authToken)){
        next();
      }else{
        res.redirect('/login');
      }
    }
  }
});

router.post('/login', (req, res) => {
  var ip = req.header('x-forwarded-for') || req.connection.remoteAddress;
  var token = authentication.authenticateUser(req.body.username, req.body.password, ip);
  if(token !== 0){
    res.cookie('authToken', token);
  }else{
    res.redirect('/login');
  }
});

module.exports = router;
