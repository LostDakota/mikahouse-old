var app = require('express')();
var config = require('./config.js');
var utils = require('./util/index');

var routes = require('./controllers/index');

app.set('view engine', 'pug');

app.use(utils.logger);
app.use(utils.cookie);
app.use(utils.compression);
app.use(utils.jsonParser);
app.use(utils.urlParser);

if(config.static) {
  app.use(require('express').static('./dist'));
}

app.use(routes);

app.listen(config.port, () => {
  console.log('listening on ' + config.port);
});
