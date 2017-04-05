var config = require(__dirname + '/../config');
var rfs = require('rotating-file-stream');
var morgan = require('morgan');
var fs = require('fs');
var bodyParser = require('body-parser');
var compression = require('compression');
var cookieParser = require('cookie-parser');

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

exports.logger = morgan(':real-address - :remote-user [:date[clf]] ":method :url HTTP/:http-version" :status :res[content-length]', {stream:accessLog});
exports.jsonParser = bodyParser.json();
exports.urlParser = bodyParser.urlencoded({extended: false});
exports.cookie = cookieParser();
exports.compression = compression();
