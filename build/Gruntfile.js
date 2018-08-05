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
        watch: {
            less: {
                files: ['less/**/*.less'], // which files to watch
                tasks: ['less']
            }
        }

    });

    // Task definition
    grunt.registerTask('compile', ['less']);
    grunt.registerTask('default', ['compile', 'watch']);
};