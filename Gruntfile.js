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
        separator: '',
        stripBanners: true
      },
      dist: {
        //src: ['library/js/scripts.min.js'],
        src: ['library/js/libs/jquery.infinitescroll.js', 'library/js/scripts.js'],
        dest: 'inc/final.min.js',
      },
    },
    uglify: {
      build: {
        src: ['library/js/scripts.js'],
        dest: 'library/js/scripts.min.js'
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

  //grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  //grunt.registerTask('default', [ 'uglify', 'concat', 'compass', 'cssmin', 'watch']);
  grunt.registerTask('default', [ 'concat', 'compass', 'cssmin', 'watch']);
};