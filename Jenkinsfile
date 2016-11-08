node {
    stage "Prepare environment"
        checkout scm
        def environment  = docker.build 'julienbreux/human:latest'

        environment.inside {
            stage "Checkout and build deps"
                sh "composer install"

            stage "Test"
                sh "phpunit --log-junit reports/phpunit/phpunit.xml"
                junit "reports/**/*.xml"
        }

    stage "Cleanup"
        deleteDir()
}
