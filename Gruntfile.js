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
        tasks: ['default'],
        options: { title: '"Watch"', message: '"Snipers on the roof, sir!"' }
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

    cssnano: {
      options: {
        sourcemap: false
      },
      dist: {
        files: {
          'includes/css/style.min.css': 'includes/css/style_dev.css'
        }
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')({
            browsers: ['last 2 versions']
          })
        ]
      },
      dist: {
        src: 'includes/css/*.css'
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 8', 'ie 9', '> 1%'],
        title: 'Task Complete',  // optional
        message: 'SASS and Uglify finished running', //required
      },
      main: {
        expand: true,
        flatten: true,
        src: 'includes/css/*.css',
        dest: 'includes/css'
      }
    },
  });

  // carrega plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-cssnano');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-autoprefixer');

  grunt.registerTask( 'default', [ 'autoprefixer', 'cssnano', 'uglify', 'watch', 'postcss' ] );
};
