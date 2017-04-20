var config = require('../config');
var fs = require('fs');
var rfs = require('rotating-file-stream');
var morgan = require('morgan');

if(!fs.existsSync(config.logDir)){
  fs.mkdirSync(config.logDir);
}

var accessLog = rfs('access.log', {
  size: '10M',
  path: config.logDir,
  compress: 'gzip'
});

morgan.token('real-address', (req, res) => {
  return req.headers['x-forwarded-for'];
});

morgan(':real-address - :remote-user [:date[clf]] ":method :url HTTP/:http-version" :status :res[content-length]', {stream:accessLog});

module.exports = morgan;
