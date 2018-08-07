//Gruntfile
module.exports = function (grunt) {

    // load all grunt tasks
    require("load-grunt-tasks")(grunt);

    // Initializing the configuration object
    grunt.initConfig({
        less: {
            production: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "../style.css": "less/style.less"
                }
            },
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    '../crit.min.css': 'scss/crit.scss'
                }
            }
        },
        watch: {
            less: {
                files: ['less/**/*.less'], // which files to watch
                tasks: ['less']
            }
        }

    });

    // Task definition
    grunt.registerTask('compile', ['less','sass']);
    grunt.registerTask('default', ['compile', 'watch']);
};