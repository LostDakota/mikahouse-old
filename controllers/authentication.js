var router = require('express').Router();
var authentication = require('../utils/authentication');
var exports = module.exports = {};

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

module.exports = router;
