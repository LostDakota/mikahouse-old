var db = require('../models/database');
var jwt = require('jsonwebtoken');
var config = require('../config');

exports.checkPermissions = function(token){
  jwt.verify(token, config.secret, (err, decoded) => {
    if(!err){
      return true;
    }else{
      return false;
    }
  });
};

exports.authenticateUser = function(username, password, ip){
  var decodedPassword = new Buffer(password).toString('base64');
  db.getConnection((err, connection) => {
    connection.query('SELECT id, username, email FROM users WHERE username=' + username + ' AND password=' + decodedPassword, (err, row) => {
      if(!err && row.length == 1){
        return jwt.sign(row[0], config.secret);
      }else{
        connection.query('INSERT INTO invalid_attemps (username, password, address) VALUES ("' + username +'", "' + password + '", "' + ip + '")', (err, row) => {
          if(!err){
            console.log('Invalid login attempt! - ' + username + ' ' + password);
          }
          connection.release();
        });
        return 0;
      }
      connection.release();
    });
  });
};
