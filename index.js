/*jshint esversion: 6 */

var config = require('./config');
var app = require('express')();

var routes = require('./controllers/index');

app.set('view engine', 'pug');

if(config.static) {
  app.use(require('express').static('./dist'));
}

app.use(routes);

app.listen(config.port, () => {
  console.log('listening on ' + config.port);
});
