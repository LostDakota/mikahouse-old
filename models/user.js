/*jshint esversion: 6 */

var db = require('database');

exports.get = function(name){
  db.getConnection((err, connection) => {
    if(err) return err;
    connection.query('SELECT * FROM tracker WHERE name=' + name, (err, rows) => {
      if(err){
        throw err;
      }else{
        return rows;
      }
      connection.close();
    });
  });
};
