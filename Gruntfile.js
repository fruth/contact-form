module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      target: {
        files: {
          'assets/js/contact-us.min.js': [
            'assets/js/vendor/jquery-2.1.4.min.js',
            'assets/js/bin/formSender.js',
            'assets/js/bin/contact-us.js'
          ]
        }
      }
    },
    sass: {
			dist: {
				files: {
					'assets/styles/contact.css' : 'assets/styles/sass/contact.scss'
				}
			}
		},
    cssmin: {
      target: {
        files: {
          'assets/styles/contact.min.css': ['assets/styles/contact.css']
        }
      }
    },
		watch: {
			css: {
				files: ['assets/styles/sass/*.scss', 'assets/js/*/*.js'],
				tasks: ['sass', 'cssmin', 'uglify']
			}
		}
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('dev', ['sass', 'cssmin', 'uglify']);

};
