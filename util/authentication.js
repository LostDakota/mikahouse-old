var router = require('express').Router();

router.get('*', (req, res, next) => {
  next();
});
