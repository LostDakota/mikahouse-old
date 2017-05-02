var router = require('express').Router();
var auth = require('./authentication.js');
var login = require('./login.js');

router.use(auth);
router.use(login);
// router.get('*', (req, res, next) => {
//   res.send('catch all');
// });

module.exports = router;
