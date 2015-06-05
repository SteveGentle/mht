// NOTE: look for UPDATE: below and follow notes before removing 'start' from filename.
// NOTE: update the project short name with the short name of your project
var projectShortName = 'org';
module.exports = function(grunt){

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    dirs: {
      bower: './bower_components',
	  fonts: './public/includes/fonts',
      lib: {
      	bootstrap: './bower_components/bootstrap-sass-official/assets',
      	bootstrapjs: './bower_components/bootstrap-sass-official/assets/javascripts/bootstrap',
      	fontawesome: './bower_components/fontawesome',
      	jquery: './bower_components/jquery/dist',
        modernizr: './bower_components/modernizr'
      },
      pl_src: {
      	base: './source',
      	sass: './source/assets/stylesheets',
      	scripts: './source/assets/scripts'
      },
      pl_dest: {
        base: './public/includes',
        css: './public/includes/css',
        js: './public/includes/js'
      },
      cms_dest: {
        base: '../../CMS400/includes/' + projectShortName,
        css: '../../CMS400/includes/' + projectShortName + '/css',
        js: '../../CMS400/includes/'  + projectShortName + '/js'
      }
    }
  });

  //load grunt config
  require('load-grunt-tasks')(grunt);

  //load tasks
  grunt.loadTasks("./grunt/tasks");

  //measures the time each task takes
  require('time-grunt')(grunt);

  grunt.registerTask('default', [
    'watch'
  ]);
  grunt.registerTask('firstrun', [
	'shell:patternlabFirstRun',
	'shell:setupFolders',
	'copy:firstRun',
	'compass',
	'concat',
    'uglify'
  ]);
  grunt.registerTask('startup', [
	'shell:patternlab',
	'compass',
	'concat',
    'uglify'
  ]);
  grunt.registerTask('copyToCms', [
	'copy:cms'
  ]);
  grunt.registerTask('buildToCms', [
	'compass',
	'cssmin',
	'concat',
	'uglify',
	'copy:cms'
  ]);
};