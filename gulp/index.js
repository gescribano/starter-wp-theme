var fs = require('fs');
var onlyScripts = require('./util/scriptFilter');
var tasks = fs.readdirSync('./gulp/tasks/').filter( onlyScripts );

global.themePath = './wordpress/wp-content/themes/retrouve/';

tasks.forEach(function(task) {
  require( './tasks/' + task );
});
