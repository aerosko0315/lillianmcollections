module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          implementation: require('sass'),
          outputStyle: 'compressed',
          sourceMap: true,
          debugInfo: false
        },
        files: {
          '../style.css': 'sass/style.scss',
          '../admin-style.css': 'sass/admin-style.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 9']
      },
      dist: {
        files: {
          '../style.css': 'sass/style.scss',
          '../admin-style.css': 'sass/admin-style.scss'
        }
      }
    },

    uglify: {
      options: {
        mangle: false
      },
      my_target: {
        files: {
        }
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['autoprefixer', 'sass']
      },
      js: {
        files: ['js/*.js'],
        tasks: ['uglify']
      }
    }

  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);

};
