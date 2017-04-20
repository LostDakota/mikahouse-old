var config = require(__dirname + '/../config');
var bodyParser = require('body-parser');

exports.logger = require('./logger')('combined');
exports.jsonParser = bodyParser.json();
exports.urlParser = bodyParser.urlencoded({extended: false});
exports.compression = require('compression')();
