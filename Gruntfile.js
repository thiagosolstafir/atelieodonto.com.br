module.exports = function(grunt) {
  grunt.initConfig({
    uglify: {
      'includes/js/scripts.min.js': 'includes/js/scripts_dev.js',
    },

    cssmin: {
      dist: {
        options: {
          keepSpecialComments: 0
        },
        files: {
          'includes/css/style.min.css': ['includes/css/style_dev.css'],
          'includes/css/mobile.min.css': ['includes/css/mobile_dev.css'],
          'includes/css/helper.min.css': ['includes/css/helper_dev.css'],
          'includes/css/menu-mobile.min.css': ['includes/css/menu-mobile_dev.css'],
          'includes/css/lightbox.min.css': ['includes/css/lightbox_dev.css']
        }
      }
    },

    watch: {
      scripts: {
        files: ['includes/css/*.css', 'includes/js/*.js', '*.php', 'template-site/*.php'],
        tasks: ['default']
      },
    },


    browserSync: {
      dev: {
        bsFiles: {
          src : ['includes/css/*.css', '*.php', 'template-site/*.php', 'includes/js/*.js'],
        },
        options: {
          baseDir: "/",
          index: "home.php"
        }
      }
    },


  });

  // carrega plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  grunt.registerTask( 'default', [ 'cssmin', 'uglify', 'watch' ] );
};
