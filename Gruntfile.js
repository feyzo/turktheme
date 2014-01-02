module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      scripts: {
        files: ['library/js/*'],
        tasks: ['concat']
      },
      css: {
        files: 'library/scss/*',
        tasks: ['compass', 'cssmin']
      },
    },
    concat: {
      options: {
        separator: ';',
      },
      dist: {
        src: ['library/js/libs/modernizr.custom.min.js', 'library/js/libs/jquery-1.10.2.min.js', 'library/js/scripts.js'],
        dest: 'inc/final.min.js',
      },
    },
    uglify: {
      build: {
        src: 'inc/final.min.js',
        dest: 'inc/final.min.js'
      }
    },
    compass: {                  
      dist: {                   
        options: {              
          sassDir: 'library/scss',
          cssDir: 'library/css'
        }
      }
    },
    cssmin: {
      combine: {
        files: {
          'inc/final.min.css': ['library/css/*']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  //grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  //grunt.registerTask('default', [ 'concat', 'uglify', 'compass', 'cssmin']);
grunt.registerTask('default', [ 'concat', 'compass', 'cssmin', 'watch']);
};